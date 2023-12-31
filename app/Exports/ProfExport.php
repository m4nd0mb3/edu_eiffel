<?php

namespace App\Exports;

use App\Models\Estudante;
use Illuminate\Support\Facades\Auth;

use Maatwebsite\Excel\Concerns\FromCollection;
use App\Models\DMark;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\Exportable;
use Illuminate\Contracts\Support\Responsable;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\BeforeExport;
use Maatwebsite\Excel\Events\AfterSheet;
use Maatwebsite\Excel\Concerns\WithDrawings;
use PhpOffice\PhpSpreadsheet\Worksheet\Drawing;
use Maatwebsite\Excel\Concerns\WithCustomStartCell;
use Maatwebsite\Excel\Concerns\WithColumnWidths;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithMappedCells;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

use Maatwebsite\Excel\Columns\Column;
use Illuminate\Support\Facades\DB;
use stdClass;

class ProfExport implements FromView, WithEvents
{
    use Exportable;
    /**
     * @return \Illuminate\Support\Collection
     */

    protected $liceu;
    protected $mix_id;
    protected $classe;
    protected $trimestre_id;

    public function __construct($liceu, $mix_id, $classe, $trimestre_id)
    {
        $this->liceu = $liceu;
        $this->mix_id = $mix_id;
        $this->classe = $classe;
        $this->trimestre_id = $trimestre_id;
    }

    public function view(): View
    {

        $id = Auth::id();
        $array = [];

        // $notas = DMark::where('professor_id', '=', $id)->get();
        $trimestre = DB::table('trimestres')
            ->select('*')
            ->where('id', '=', $this->trimestre_id)
            ->first();

        $notas = DB::table('d_marks')
            ->join('estudantes', 'estudantes.id', '=', 'd_marks.estudante_id')
            ->select('estudantes.id', 'estudantes.name as nome_estudante')
            ->where('d_marks.liceu', '=', $this->liceu)
            ->where('d_marks.classe', '=', $this->classe)
            ->where('d_marks.professor_id', '=', $id)
            ->where('tipo_id', '=', 1)
            ->where('mix_id', '=', $this->mix_id)
            ->where('trimestre_id', '=', $this->trimestre_id)
            ->groupBy('estudantes.id', 'estudantes.name')
            ->get();

        $disciplina = DB::table('mix_d_p_s')
            ->join('disciplinas', 'disciplinas.id', '=', 'mix_d_p_s.disciplina_id')
            ->select('disciplinas.disciplina as nome_disciplina')
            ->where('mix_d_p_s.id', '=', $this->mix_id)
            ->first();
                
        $max_avaliacao = DB::table(function ($query) use ($id) {
            $query->select(DB::raw('COUNT(*) AS total_linhas'))
                ->from('d_marks')
                ->where('liceu', '=', $this->liceu)
                ->where('classe', '=', $this->classe)
                ->where('professor_id', '=', $id)
                ->where('tipo_id', '=', 1)
                ->where('trimestre_id', '=', $this->trimestre_id)
                ->where('mix_id', '=', $this->mix_id)
                ->groupBy(DB::raw('DATE(created_at)'));
        }, 'subconsulta')
            ->select(DB::raw('COUNT(*) AS total_provas'))
            ->first();

        $avaliacoes = DB::table('d_marks')
            ->select(DB::raw('DATE(created_at) as data'), 'nota', 'estudante_id', DB::raw('count(*) as total_provas'))
            ->where('liceu', '=', $this->liceu)
            ->where('classe', '=', $this->classe)
            ->where('professor_id', '=', $id)
            ->where('tipo_id', '=', 1)
            ->where('trimestre_id', '=', $this->trimestre_id)
            ->where('mix_id', '=', $this->mix_id)
            ->groupBy(DB::raw('DATE(created_at)'), 'nota', 'estudante_id')
            ->orderBy(DB::raw('DATE(created_at)'))
            ->get();
        $datas_avaliacao = DB::table('d_marks')
            ->select(DB::raw('DATE(created_at) as data'))
            ->where('liceu', '=', $this->liceu)
            ->where('classe', '=', $this->classe)
            ->where('professor_id', '=', $id)
            ->where('tipo_id', '=', 1)
            ->where('trimestre_id', '=', $this->trimestre_id)
            ->where('mix_id', '=', $this->mix_id)
            ->groupBy(DB::raw('DATE(created_at)'))
            ->orderBy(DB::raw('DATE(created_at)'))
            ->get();

        // $datas_avaliacao = []; // Array para armazenar as datas de avaliação existentes
        // foreach ($avaliacoes as $avaliacao) {
        //     $datas_avaliacao[] = $avaliacao->data;
        // }

        foreach ($notas as $item) {
            $estudante = new stdClass();
            $estudante->nome_estudante = $item->nome_estudante;

            $estudante_avaliacoes = [];
            foreach ($datas_avaliacao as $data_avaliacao) {
                $avaliacao_encontrada = false;

                foreach ($avaliacoes as $avaliacao) {
                    if ($avaliacao->estudante_id == $item->id && $avaliacao->data == $data_avaliacao->data) {
                        $estudante_avaliacoes[] = $avaliacao;
                        $avaliacao_encontrada = true;
                        break;
                    }
                }

                if (!$avaliacao_encontrada) {
                    // Adicionar avaliação com nota 0 para o aluno e a data de avaliação atual
                    $avaliacao_nula = new stdClass();
                    $avaliacao_nula->data = $data_avaliacao->data;
                    $avaliacao_nula->nota = 0;
                    $avaliacao_nula->estudante_id = $item->id;
                    $avaliacao_nula->total_provas = 0;
                    $estudante_avaliacoes[] = $avaliacao_nula;
                }
            }

            // Calcular a média das notas
            $soma_notas = 0;
            foreach ($estudante_avaliacoes as $avaliacao) {
                $soma_notas += $avaliacao->nota;
            }
            $media_notas = count($estudante_avaliacoes) > 0 ? $soma_notas / count($estudante_avaliacoes) : 0;

            $prova_professor = DB::table('d_marks')
                ->select('estudante_id', 'nota', DB::raw('count(*) as total_provas'), DB::raw('MAX(id) as max_id'))
                ->where('liceu', '=', $this->liceu)
                ->where('classe', '=', $this->classe)
                ->where('professor_id', '=', $id)
                ->where('tipo_id', '=', 2)
                ->where('trimestre_id', '=', $this->trimestre_id)
                ->where('mix_id', '=', $this->mix_id)
                ->where('estudante_id', '=', $item->id)
                ->groupBy('estudante_id', 'nota', 'trimestre_id', 'tipo_id', 'classe', 'liceu', 'professor_id')
                ->orderByDesc('max_id')
                ->first();

            $estudante->avaliacoes = $estudante_avaliacoes;
            $estudante->mac = $media_notas;
            $estudante->prova_professor = $prova_professor ? $prova_professor->nota : 0;
            $estudante->ct = ($estudante->prova_professor + $media_notas)/2;
            array_push($array, $estudante);
        }

        $classes = [
            1 => '10 A',
            2 => '10 B',
            3 => '11 A',
            4 => '11 B',
            5 => '12 A',
            6 => '12 B'
        ];

        return view(
            'professor.caderneta_trimestral_disciplina',
            [
                'notas' => $array,
                'turma' => $classes[$this->classe],
                'max_avaliacao' => $max_avaliacao->total_provas,
                'trimestre_nome' => $trimestre->trimestre,
                'nome_disciplina' => $disciplina->nome_disciplina
            ]
        );

        // return view('professor.caderneta_trimestral', ['notas' => $notas]);
    }
    public function registerEvents(): array
    {
        return [

            AfterSheet::class => function (AfterSheet $event) {

                $event->sheet->getStyle('A1:D1')->applyFromArray(
                    [
                        'font' => [
                            'bold' => true
                        ],
                        'text-decotarion' => [
                            'center' => true
                        ]

                    ]

                );

                $event->sheet
                    ->getPageSetup()
                    ->setOrientation(\PhpOffice\PhpSpreadsheet\Worksheet\PageSetup::ORIENTATION_LANDSCAPE);
            },


        ];
    }
}