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
    protected $data;
    protected $trimestre_id;

    public function __construct($liceu, $mix_id, $classe, $data, $trimestre_id)
    {
        $this->liceu = $liceu;
        $this->mix_id = $mix_id;
        $this->classe = $classe;
        $this->data = $data;
        $this->trimestre_id = $trimestre_id;
    }

    public function view(): View
    {

        $id = Auth::id();
        $array = [];

        // $notas = DMark::where('professor_id', '=', $id)->get();
        $notas = DB::table('d_marks')
            ->join('estudantes', 'estudantes.id', '=', 'd_marks.estudante_id')
            ->select('estudantes.id', 'estudantes.name as nome_estudante')
            ->where('d_marks.liceu', '=', $this->liceu)
            ->where('d_marks.classe', '=', $this->classe)
            ->where('d_marks.professor_id', '=', $id)
            ->groupBy('estudantes.id', 'estudantes.name')
            ->get();

        foreach ($notas as $item) {
            $estudante = new stdClass();
            $estudante->nome_estudante = $item->nome_estudante;
            $avaliacoes = DB::table('d_marks')
                ->select(DB::raw('DATE(created_at) as data'), 'nota', 'estudante_id', DB::raw('count(*) as total_provas'))
                ->where('liceu', '=', $this->liceu)
                ->where('classe', '=', $this->classe)
                ->where('professor_id', '=', $id)
                ->where('estudante_id', '=', $item->id)
                ->groupBy(DB::raw('DATE(created_at)'), 'nota', 'estudante_id')
                ->orderBy(DB::raw('DATE(created_at)'))
                ->get();
            $estudante->avaliacoes = $avaliacoes;
            array_push($array, $estudante);
        }
        // print_r($array);

        // $notas = DB::table('d_marks')
        //     // ->join('liceus', 'liceus.id', '=', 'd_marks.liceu')
        //     // ->join('classes', 'classes.id', '=', 'd_marks.classe')
        //     ->join('estudantes', 'estudantes.id', '=', 'd_marks.estudante_id')
        //     ->select('d_marks.*', 'estudantes.name as nome_estudante')
        //     ->where('d_marks.liceu', '=', $this->liceu)
        //     ->where('d_marks.mix_id', '=', $this->mix_id)
        //     ->where('d_marks.classe', '=', $this->classe)
        //     ->where(DB::raw('DATE(d_marks.created_at)'), '=', $this->data)
        //     ->where('d_marks.trimestre_id', '=', $this->trimestre_id)
        //     ->where('d_marks.professor_id', '=', $id)
        //     // ->groupBy(DB::raw('DATE(created_at)'), 'trimestre_id', 'liceu', 'classe', 'mix_id')
        //     ->get();

        // $estudantes = Estudante::with('marks')
        //     ->join('d_marks', 'estudantes.id', '=', 'd_marks.estudante_id')
        //     ->select('d_marks.*', 'estudantes.name as nome_estudante')
        //     ->where('d_marks.liceu', '=', $this->liceu)
        //     ->where('d_marks.mix_id', '=', $this->mix_id)
        //     ->where('d_marks.classe', '=', $this->classe)
        //     ->where(DB::raw('DATE(d_marks.created_at)'), '=', $this->data)
        //     ->where('d_marks.trimestre_id', '=', $this->trimestre_id)
        //     ->where('d_marks.professor_id', '=', $id)
        //     ->get();

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
                'turma' => $classes[$this->classe]
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