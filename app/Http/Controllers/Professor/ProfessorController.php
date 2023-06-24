<?php

namespace App\Http\Controllers\Professor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Professor;

use App\Models\Estudante;
use App\Models\ODecimaMark;
use App\Models\Orientacoe;
use App\Models\Type_PDoc;
use App\Models\Typ_Prova;
use App\Models\DMark;
use App\Models\PLink;

use App\Models\Formacoe;
use App\Models\ProfessorN;
use App\Models\Plano;
use App\Models\PDoc;
use App\Models\PTarefa;
use App\Models\Trimestre;
use App\Models\Dia;
use App\Models\Formacao;
use App\Models\NotificacaoP;
use App\Models\FaltaProfessor;
use App\Models\ProfessoroMark;
use App\Models\NdalatandoEMark;
use App\Models\Turma;
use App\Models\Classe;
use App\Models\Liceu;
use App\Models\Disciplina;
use App\Models\EMark;
use App\Models\MalanjeEMark;
use App\Models\PRelatar;
use App\Models\MixDP;
use App\Exceptions\mycustom;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

use Maatwebsite\Excel\Excel;
use PDF;

use App\Exports\ProfExport;



use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class ProfessorController extends Controller
{
    private $excel;


    // Para o liceu
    function create(Request $request)
    {
        //Validate inputs

        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:professors,email',

            'password' => 'required|min:5|max:30',
            'cpassword' => 'required|min:5|max:30|same:password'
        ]);


        $teachers = new Professor();

        $teachers->name = $request->name;
        $teachers->email = $request->email;
        $teachers->first_name = $request->first_name;
        $teachers->second_name = $request->second_name;
        $teachers->bi = $request->bi;
        $teachers->es_civil = $request->es_civil;
        $teachers->nif = $request->nif;
        $teachers->idade = $request->idade;
        $teachers->genero = $request->genero;
        $teachers->data_nasc = $request->data_nasc;
        $teachers->nacionalidade = $request->nacionalidade;
        $teachers->bairro = $request->bairro;
        $teachers->monicipio = $request->monicipio;
        $teachers->provincia = $request->provincia;





        $teachers->liceu = $request->liceu;

        $teachers->classe_um = $request->classe_um;
        $teachers->classe_dois = $request->classe_dois;
        $teachers->classe_tres = $request->classe_tres;
        $teachers->classe_quatro = $request->classe_quatro;
        $teachers->classe_cinco = $request->classe_cinco;
        $teachers->classe_seis = $request->classe_seis;


        $teachers->situacao = $request->situacao;

        $teachers->password = \Hash::make($request->password);

        if ($request->hasFile('photo') && $request->file('photo')->isValid()) {

            $requestImage = $request->photo;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

            $requestImage->move(public_path('media/professor/img'), $imageName);

            $teachers->photo = $imageName;

        }
        if ($request->hasFile('bilhete') && $request->file('bilhete')->isValid()) {

            $requestImage = $request->bilhete;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

            $requestImage->move(public_path('media/professor/bi'), $imageName);

            $teachers->bilhete = $imageName;

        }

        if ($request->hasFile('hl') && $request->file('hl')->isValid()) {

            $requestImage = $request->hl;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

            $requestImage->move(public_path('media/professor/hl'), $imageName);

            $teacher->hl = $imageName;

        }

        if ($request->hasFile('cv') && $request->file('cv')->isValid()) {

            $requestImage = $request->cv;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

            $requestImage->move(public_path('media/professor/cv'), $imageName);

            $teachers->cv = $imageName;

        }

        if ($request->hasFile('do') && $request->file('do')->isValid()) {

            $requestImage = $request->do;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

            $requestImage->move(public_path('media/professor/do'), $imageName);

            $teachers->do = $imageName;

        }

        if ($request->hasFile('sdo') && $request->file('sdo')->isValid()) {

            $requestImage = $request->sdo;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

            $requestImage->move(public_path('media/professor/sdo'), $imageName);

            $teachers->sdo = $imageName;

        }

        if ($request->hasFile('gm') && $request->file('gm')->isValid()) {

            $requestImage = $request->gm;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

            $requestImage->move(public_path('media/professor/gm'), $imageName);

            $teachers->gm = $imageName;

        }


        $save = $teachers->save();

        if ($save) {
            return redirect()->back()->with('success', 'REgistrado com sucesso');
        } else {
            return redirect()->route('professor.login')->with('fail', 'Erro incorretas');


        }
    }

    // Para o Geral

    function check(Request $request)
    {
        //Validate Inputs
        $request->validate([
            'email' => 'required|email|exists:professors,email',
            'password' => 'required|min:5|max:30'
        ], [
            'email.exists' => 'Email inexistente'
        ]);

        $creds = $request->only('email', 'password');

        if (Auth::guard('professor')->attempt($creds)) {
            return redirect()->route('professor.home');
        } else {
            return redirect()->route('professor.login')->with('fail', 'Credências incorretas');
        }
    }

    function logout()
    {
        Auth::guard('professor')->logout();
        return redirect()->route('professor.login');
    }



    function register()
    {


        $classes = Classe::all();

        $turmas = Turma::all();
        $liceus = Liceu::all();

        return view('professor.register', ['classes' => $classes, 'turmas' => $turmas, 'liceus' => $liceus]);

    }
    //Enviar PRovas para o Director Pedagogico

    function decima_a()
    {

        $estudantes = Estudante::where('liceu', '=', 4)->where('classe', '=', 1)->where('turma', '=', 1)->get();

        $professor = Professor::all();

        return view('professor.decima_a', ['estudantes' => $estudantes, 'professor' => $professor]);

    }

    function orientacoes()
    {

        $id = Auth::id();
        $professores = Professor::where("id", "=", "$id")->get();

        $disciplinas = DB::table('mix_d_p_s')
            ->select('disciplina_id', 'professor_id', DB::raw('count(*) as total'))->where('professor_id', '=', $id)
            ->groupBy('disciplina_id', 'professor_id')
            ->get('disciplina_id');
        return view('professor.orientacao', ['professores' => $professores, 'disciplinas' => $disciplinas]);

    }

    function orientacao(Request $request)
    {

        $id = Auth::id();

        $orientacoes = new Orientacoe();

        //    $orientacoes->turma = $request->turma;
        $orientacoes->liceu = $request->liceu;
        $orientacoes->disciplina = $request->disciplina;
        $orientacoes->classe = $request->classe;
        $orientacoes->orientacao = $request->orientacao;
        $orientacoes->link = $request->link;
        $orientacoes->professor_id = $id;

        if ($request->hasFile('ficheiro') && $request->file('ficheiro')->isValid()) {

            $requestImage = $request->ficheiro;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

            $requestImage->move(public_path('/professor/media/orientacao'), $imageName);

            $orientacoes->ficheiro = $imageName;

        }

        $save = $orientacoes->save();
        if ($save) {
            return redirect()->route('professor.orientacoes_enviadas')->with('success', 'Orientações enviadas com sucesso');
        } else {
            return redirect()->back()->with('fail', 'Orientações não Enviadas');
        }
    }



    function orientacoes_enviadas()
    {

        $id = Auth::id();
        $orientacoes = Orientacoe::where("professor_id", "=", "$id")->get();

        return view('professor.ver_orientacoes', ['orientacoes' => $orientacoes]);


    }




    function planos()
    {

        $id = Auth::id();

        $professores = Professor::where("id", "=", "$id")->get();

        $disciplinas = DB::table('mix_d_p_s')
            ->select('disciplina_id', 'professor_id', DB::raw('count(*) as total'))->where('professor_id', '=', $id)
            ->groupBy('disciplina_id', 'professor_id')
            ->get('disciplina_id');
        $trimestres = Trimestre::all();


        return view('professor.plano', [
            'professores' => $professores,
            'trimestres' => $trimestres,
            'disciplinas' => $disciplinas
        ]);

    }


    function plano(Request $request)
    {

        $id = Auth::id();

        $planos = new Plano();


        $planos->disciplina = $request->disciplina;
        $planos->data = $request->data;
        $planos->tema = $request->tema;
        //   $planos->turma = $request->turma;
        $planos->classe = $request->classe;
        $planos->trimestre_id = $request->trimestre_id;
        $planos->liceu = $request->liceu;
        $planos->tipo = $request->tipo;

        $planos->professor_id = $id;

        if ($request->hasFile('plano') && $request->file('plano')->isValid()) {

            $requestImage = $request->plano;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

            $requestImage->move(public_path('/media/professor/planos'), $imageName);

            $planos->plano = $imageName;

        }


        $save = $planos->save();


        if ($save) {
            return redirect()->route('professor.plano_enviados')->with('success', 'Plano Enviado Com sucesso');
        } else {
            return redirect()->back()->with('fail', 'Plano não Enviado');
        }

    }

    function plano_enviados()
    {

        $id = Auth::id();
        $planos = Plano::where("professor_id", "=", "$id")
            ->orderBy('created_at', 'desc')
            ->get();

        return view('professor.ver_plano', ['planos' => $planos]);


    }


    function solicitar()
    {

        $id = Auth::id();

        $professores = Professor::where("id", "=", "$id")->get();
        $tipedocs = Type_PDoc::all();


        return view('professor.solicitar', ['professores' => $professores, 'tipedocs' => $tipedocs,]);

    }

    function sol(Request $request)
    {
        $id = Auth::id();

        $declaracoes = new PDoc();

        $declaracoes->tipo_id = $request->tipo_id;
        $declaracoes->liceu = $request->liceu;
        $declaracoes->professor_id = $id;



        $save = $declaracoes->save();


        if ($save) {
            return redirect()->route('professor.solicitacao_enviadas')->with('success', 'Plano Enviado Com sucesso');
        } else {
            return redirect()->back()->with('fail', 'Plano não Enviado');
        }


    }

    function solicitacao_enviadas()
    {

        $id = Auth::id();
        $solicitacoes = PDoc::where("professor_id", "=", "$id")->get();



        return view('professor.ver_solicitacao', ['solicitacoes' => $solicitacoes]);


    }

    function ver_formacao()
    {

        $id = Auth::id();
        $gerais = Formacao::where("professor_id", "=", "$id")->get();
        //  $pedagogicos = Formacoe::where('liceu', '=', 4 )->get();

        return view('professor.formacao_caminho', ['gerais' => $gerais]);

    }


    function notificacao()
    {

        $id = Auth::id();



        $administrativa = ProfessorN::where("professor_id", "=", "$id")->get();



        return view('professor.notificacao', ['administrativa' => $administrativa]);


    }





    function ver_falta()
    {

        $id = Auth::id();

        $professores = FaltaProfessor::where("professor_id", "=", "$id")->get();

        return view('professor.ver_falta', ['professores' => $professores]);

    }

    function tipo_boletim()
    {


        $id = Auth::id();
        $professor = Auth::guard('professor')->user();

        $notas_validada = DMark::where("professor_id", "=", "$id")->get();
        $notas_enviada = EMark::where("professor_id", "=", "$id")->get();

        $notas_enviadas = count($notas_enviada);
        $notas_validadas = count($notas_validada);

        return view(
            'professor.tipo_boletim',
            [
                'notas_validadas' => $notas_validadas,
                'notas_enviadas' => $notas_enviadas,
                'professor' => $professor
            ]
        );
    }


    function turmas()
    {

        $id = Auth::guard('professor')->user();

        $ids = Auth::id();

        $estudantes = Estudante::where('liceu', '=', $id->liceu)->orderBy('name', 'asc')->get();
        $estudantess = Estudante::where('liceu', '=', $id->liceu)->limit(1)->get();
        $professores = Professor::where("id", "=", "$ids")->get();
        $tipo_provas = Typ_Prova::all();
        $trimestres = Trimestre::all();
        $tipo_disciplinas = MixDP::all();

        $disciplinas = DB::table('mix_d_p_s')
            ->select('disciplina_id', 'professor_id', DB::raw('count(*) as total'))->where('professor_id', '=', $ids)
            ->groupBy('disciplina_id', 'professor_id')
            ->get('disciplina_id');

        //  $disciplinass = Disciplina::where("id","=","$tipo_disciplinas")->get();
        return view('professor.turmas', [
            'estudantes' => $estudantes,
            'trimestres' => $trimestres,
            'disciplinas' => $disciplinas,
            'estudantess' => $estudantess,
            'professores' => $professores,
            'tipo_provas' => $tipo_provas
        ]);

    }



    function classe($liceu, $classe)
    {

        $id = Auth::id();

        $estudantes = Estudante::where('liceu', '=', $liceu)->where('classe', '=', $classe)->orderBy('name', 'asc')->get();
        $estudantess = Estudante::where('liceu', '=', $liceu)->where('classe', '=', $classe)->limit(1)->get();
        $professores = Professor::where("id", "=", "$id")->get();
        $tipo_provas = Typ_Prova::all();
        $trimestres = Trimestre::all();
        $tipo_disciplinas = MixDP::all();

        $disciplinas = DB::table('mix_d_p_s')
            ->select('disciplina_id', 'professor_id', DB::raw('count(*) as total'))->where('professor_id', '=', $id)
            ->groupBy('disciplina_id', 'professor_id')
            ->get('disciplina_id');

        //  $disciplinass = Disciplina::where("id","=","$tipo_disciplinas")->get();
        return view('professor.classe', [
            'estudantes' => $estudantes,
            'trimestres' => $trimestres,
            'disciplinas' => $disciplinas,
            'estudantess' => $estudantess,
            'professores' => $professores,
            'tipo_provas' => $tipo_provas
        ]);

    }

    function create_boletim($liceu)
    {

        $id = Auth::id();

        $estudantes = Estudante::where('liceu', '=', $liceu)->orderBy('name', 'asc')->get();
        $estudantess = Estudante::where('liceu', '=', $liceu)->limit(1)->get();
        $professores = Professor::where("id", "=", "$id")->first();
        $tipo_provas = Typ_Prova::all();
        $trimestres = Trimestre::all();

        $disciplinas = DB::table('mix_d_p_s')
            ->join('disciplinas', 'disciplinas.id', '=', 'mix_d_p_s.disciplina_id')
            ->select('disciplinas.disciplina', 'mix_d_p_s.disciplina_id', 'mix_d_p_s.professor_id', DB::raw('count(*) as total'))->where('mix_d_p_s.professor_id', '=', $id)
            ->groupBy('mix_d_p_s.disciplina_id', 'mix_d_p_s.professor_id')
            ->get();

        $professor_classe = DB::table('professors')
            ->select('*')->where('id', '=', $id)
            ->limit(1)
            ->get();
        
        $classes = [
            1 => '10 A',
            2 => '10 B',
            3 => '11 A',
            4 => '11 B',
            5 => '12 A',
            6 => '12 B'
        ];
        // $classes=[];
        // if ($professor_classe[0]->classe_um) {
        //     array_push($classes, '10 A');
        // }
        // if ($professor_classe->classe_dois) {
        //     array_push($classes, '10 B');
        // }
        // if ($professor_classe->classe_tres) {
        //     array_push($classes, '11 A');
        // }
        // if ($professor_classe->classe_quatro) {
        //     array_push($classes, '11 B');
        // }
        // if ($professor_classe->classe_cinco) {
        //     array_push($classes, '12 A');
        // }
        // if ($professor_classe->classe_seis) {
        //     array_push($classes, '12 B');
        // }
        



        //  $disciplinass = Disciplina::where("id","=","$tipo_disciplinas")->get();
        return view('professor.create_boletim', [
            'estudantes' => $estudantes,
            'trimestres' => $trimestres,
            'disciplinas' => $disciplinas,
            'estudantess' => $estudantess,
            'professores' => $professores,
            'tipo_provas' => $tipo_provas,
            'classes' => $classes
        ]);

    }

    function get_students_by_class(Request $request)
    {

        $id = Auth::id();
        // $liceu, $classe, $turma
        // return response()->json(['mensagem' => $request->liceu]);

        $estudantes = DB::table('estudantes')
            // ->join('classes', 'disciplinas.id', '=', 'mix_d_p_s.disciplina_id')
            // ->join('turmas', 'disciplinas.id', '=', 'mix_d_p_s.disciplina_id')
            ->select('*')
            ->where('estudantes.liceu', '=', $request->liceu)
            ->where('estudantes.classe', '=', $request->classe)
            ->where('estudantes.turma', '=', $request->turma)
            // ->groupBy('mix_d_p_s.disciplina_id', 'mix_d_p_s.professor_id')
            ->get();



        //  $disciplinass = Disciplina::where("id","=","$tipo_disciplinas")->get();
        return response()->json([
            'estudantes' => $estudantes,
        ]);

    }

    public function imprimir_boletim_t()
    {
        $data = [
            'title' => 'Sample PDF',
            'content' => 'This is the content of the PDF.',
        ];

        $pdf = \Barryvdh\DomPDF\Facade\Pdf::loadView('professor.pdf', $data);

        return $pdf->download('sample.pdf');
    }

    public function imprimir_cardeneta(Request $request, $liceu, $mix_id, $classe, $trimestre_id)
    {
        return $this->excel->download(new ProfExport($liceu, $mix_id, $classe, $trimestre_id), 'caderneta_trimestral.xlsx');
    }

    function enviar_nota(Request $request, $liceu, $classe)
    {

        $id = Auth::id();

        $estudantes = Estudante::where('liceu', '=', $liceu)->where('classe', '=', $classe)->get();
        $ii = 0;

        while ($ii < count($estudantes)) {
            $teste = EMark::create([
                'estudante_id' => $request->estudante_id[$ii],
                'professor_id' => $id,
                // 'turma'            => $request->get('turma'),
                'classe' => $request->get('classe'),
                'trimestre_id' => $request->get('trimestre_id'),
                'mix_id' => $request->get('mix_id'),
                'tipo_id' => $request->get('tipo_id'),
                'liceu' => $request->get('liceu'),
                'data' => $request->get('data'),
                'nota' => $request->nota[$ii],
            ]);

            $ii++;
        }

        if ($teste->save()) {
            return redirect()->route('professor.turmas')->with('success', 'Notas Envias das Com sucesso');
        } else {
            return redirect()->back()->with('fail', 'Notas não Enviadas');
        }
    }

    function listar_cardenetas(Request $request, $liceu)
    {
        $id = Auth::id();

        $cardenetas = DB::table('d_marks')
            // ->join('liceus', 'liceus.id', '=', 'd_marks.liceu')
            // ->join('classes', 'classes.id', '=', 'd_marks.classe')
            ->join('mix_d_p_s', 'mix_d_p_s.disciplina_id', '=', 'd_marks.mix_id')
            ->join('disciplinas', 'disciplinas.id', '=', 'mix_d_p_s.disciplina_id')
            ->select('disciplinas.disciplina as disciplina','d_marks.trimestre_id', 'd_marks.liceu', 'd_marks.classe', 'd_marks.mix_id', DB::raw('count(*) as total_provas'))
            ->where('d_marks.liceu', '=', $liceu)
            ->where('d_marks.professor_id', '=', $id)
            ->groupBy('d_marks.trimestre_id', 'd_marks.liceu', 'd_marks.classe', 'd_marks.mix_id')
            ->get();
        
        $classes = [
            1 => '10 A',
            2 => '10 B',
            3 => '11 A',
            4 => '11 B',
            5 => '12 A',
            6 => '12 B'
        ];
        
        return view('professor.listar_cardenetas',
        [
            'cardenetas' => $cardenetas,
            'classes' => $classes
        ]);
    }



    function relatar()
    {


        return view('professor.relato');

    }

    function enviar_relato(Request $request)
    {
        $id = Auth::id();
        $declaracoes = new PRelatar();

        $declaracoes->tipo = $request->tipo;
        $declaracoes->relato = $request->relato;

        $declaracoes->professor_id = $id;
        $declaracoes->liceu = $request->liceu;



        $save = $declaracoes->save();


        if ($save) {
            return redirect()->route('professor.ver_relatos')->with('success', 'Apoio tecníco Enviado Com sucesso');
        } else {
            return redirect()->back()->with('fail', 'Declaracao não Enviado');
        }


    }


    function ver_relatos()
    {



        $id = Auth::id();




        $relatos = PRelatar::where('professor_id', '=', $id)->get();

        return view('professor.ver_relatos', ['relatos' => $relatos]);


    }





    function form($id)
    {



        $id = Auth::id();

        $professores = Professor::findOrFail($id);
        $disciplinas = Disciplina::all();
        $classes = Classe::all();

        return view('professor.form', [
            'professores' => $professores,
            'classes' => $classes,
            'disciplinas' => $disciplinas
        ]);

    }

    function info_qr()
    {

        $id = Auth::id();

        $professores = Professor::where('id', '=', $id)->get();

        return view(' professor.qr_code', ['professores' => $professores]);
    }



    function edit_inf(Request $request)
    {



        $data = $request->all();

        //   Estudante::findOrFail($request->id)->update($request->all());

        if ($request->hasFile('photo') && $request->file('photo')->isValid()) {

            $requestImage = $request->photo;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

            $requestImage->move(public_path('media/professor/img'), $imageName);

            $data['photo'] = $imageName;

        }


        if ($request->hasFile('hl') && $request->file('hl')->isValid()) {

            $requestImage = $request->hl;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

            $requestImage->move(public_path('media/professor/pdf'), $imageName);

            $data['hl'] = $imageName;

        }

        if ($request->hasFile('bilhete') && $request->file('bilhete')->isValid()) {

            $requestImage = $request->bilhete;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

            $requestImage->move(public_path('media/professor/pdf'), $imageName);

            $data['bilhete'] = $imageName;

        }

        if ($request->hasFile('cv') && $request->file('cv')->isValid()) {

            $requestImage = $request->cv;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

            $requestImage->move(public_path('media/professor/cv'), $imageName);

            $data['cv'] = $imageName;


        }

        if ($request->hasFile('do') && $request->file('do')->isValid()) {

            $requestImage = $request->do;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

            $requestImage->move(public_path('media/professor/do'), $imageName);

            $data['do'] = $imageName;


        }

        if ($request->hasFile('sdo') && $request->file('sdo')->isValid()) {

            $requestImage = $request->sdo;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

            $requestImage->move(public_path('media/professor/sdo'), $imageName);

            $data['sdo'] = $imageName;


        }

        if ($request->hasFile('gm') && $request->file('gm')->isValid()) {

            $requestImage = $request->gm;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

            $requestImage->move(public_path('media/professor/gm'), $imageName);

            $data['gm'] = $imageName;


        }

        Auth::guard('professor')->user()->update($data);
        if (Auth::guard('professor')->user()->update($data)) {
            return redirect()->route('professor.home')->with('success', 'Dados Actualizados com sucesso');
        }

    }

    function ver_dados()
    {

        $id = Auth::guard('professor')->user();

        $ids = Auth::id();

        $professor = Professor::where("id", "=", "$ids")->get();
        $provas = Plano::where("professor_id", "=", "$ids")->get();
        $faltas = FaltaProfessor::where('liceu', '=', $id->liceu, )->where("professor_id", "=", "$id")->get();
        $orientacoes = Orientacoe::where('liceu', '=', $id->liceu, )->where("professor_id", "=", "$ids")->get();
        $formacoes = Formacao::where('liceu', '=', $id->liceu, )->where("professor_id", "=", "$ids")->get();
        $notas = EMark::all();
        $notass = DMark::all();
        $noti = ProfessorN::all();
        $soli = PDoc::all();

        $count_provas = count($provas);
        $count_faltas = count($faltas);
        $count_orientacoes = count($orientacoes);
        $count_formacoes = count($formacoes);
        $count_notas = count($notas);
        $noti = count($noti);
        $soli = count($soli);



        return view('professor.ver_dados', [
            'professor' => $professor,
            'count_provas' => $count_provas,
            'count_orientacoes' => $count_orientacoes,
            'count_notas' => $count_notas,
            'noti' => $noti,
            'soli' => $soli,
            'count_formacoes' => $count_formacoes,
            'count_faltas' => $count_faltas
        ]);


    }

    function ver_nota()
    {

        $id = Auth::id();

        $provas = DB::table('e_marks')
            ->select('created_at', 'classe', 'mix_id', 'liceu', DB::raw('count(*) as total'))->where('professor_id', '=', $id)->where('nota', '!=', null)
            ->orderBy('created_at', 'desc')
            ->groupBy('created_at', 'classe', 'mix_id', 'liceu')
            ->get();


        return view('professor.ver_nota', ['provas' => $provas]);
    }

    function ver_nota_validada()
    {

        $id = Auth::id();

        $provas = DB::table('d_marks')
            ->select('created_at', 'classe', 'mix_id', DB::raw('count(*) as total'))->where('professor_id', '=', $id)->where('nota', '!=', null)
            ->orderBy('created_at', 'desc')
            ->groupBy('created_at', 'classe', 'mix_id', )
            ->get();


        return view('professor.ver_nota_validada', ['provas' => $provas]);
    }

    public function ver_info_nota_professor($created_at)
    {

        $provass = EMark::where('created_at', '=', $created_at)->where('nota', '!=', null)->get();
        $provas = EMark::where('created_at', '=', $created_at)->get();

        return view('professor.ver_info_nota_professor_ondjiva', ['provas' => $provas, 'provass' => $provass]);
    }

    public function ver_info_nota_professor_validada($id, $created_at)
    {

        $provass = DMark::where('created_at', '=', $created_at)->where('professor_id', '=', $id)->where('nota', '!=', null)->get();
        $provas = DMark::where('created_at', '=', $created_at)->where('professor_id', '=', $id)->get();

        $id = Auth::id();

        // $notas = DMark::where('professor_id', '=', $id)->get();
        //   $ii = 0;


        //   $soma = $notas[$ii]->nota + $notas[$ii+2]->nota;




        return view('professor.ver_info_nota_professor_ondjiva_validada', [
            //  'soma'=>$soma,
            'provas' => $provas,
            'provass' => $provass
        ]);
    }

    public function editar_provas($created_at)
    {

        $id = Auth::id();

        $provass = EMark::where('created_at', '=', $created_at)->get();
        $provas = EMark::where('created_at', '=', $created_at)->limit(1)->get();

        $tipo_provas = Typ_Prova::all();
        //  $tipo_disciplinas = MixDP::all();

        $disciplinas = DB::table('mix_d_p_s')
            ->select('disciplina_id', 'professor_id', DB::raw('count(*) as total'))->where('professor_id', '=', $id)
            ->groupBy('disciplina_id', 'professor_id')
            ->get('disciplina_id');

        return view('professor.editar_provas', ['provas' => $provas, 'provass' => $provass, 'tipo_provas' => $tipo_provas, 'disciplinas' => $disciplinas,]);
    }


    /*function editar_p(Request $request,$liceu,$classe,$created_at){
       
        $numberPrice= $request->all();
        foreach ($numberPrice['estudante_id'] as $key => $rem) {
            $price = EMark::where('estudante_id', '=', $rem)->where('created_at', '=', $created_at)->first();
            $price->fill($request->all())->save();
                  
        }
        return view('professor.editar_provas');


    }*/

    function editar_p(Request $request, $liceu, $classe, $created_at)
    {

        $id = Auth::id();

        $estudantes = EMark::where('liceu', '=', $liceu)->where('classe', '=', $classe)
            ->where('created_at', '=', $created_at)->get();

        $ii = 0;

        while ($ii < count($estudantes)) {

            $price = EMark::find($request->get('estudante_id')[$ii]);


            $data = [
                'mix_id' => $request->get('mix_id'),
                'tipo_id' => $request->get('tipo_id'),
                'classe' => $request->get('classe'),
                'nota' => $request->nota[$ii],
                'data' => $request->get('data'),
            ];
            EMark::where('estudante_id', $request->get('estudante_id')[$ii])->update($data);

            $ii++;
        }


        return redirect()->route('professor.turmas')->with('success', 'Notas Actualizadas das Com sucesso');

        // return redirect()->back()->with('fail','Notas não Enviadas');
    }

    function eliminar_p(Request $request, $mix_id, $created_at)
    {

        $id = Auth::id();

        EMark::where('mix_id', '=', $mix_id)->where('created_at', '=', $created_at)->delete();

        return redirect()->route('professor.ver_nota')->with('success', 'Notas Envias das Com sucesso');
    }


    function ver_notificacao()
    {

        $id = Auth::id();

        $notificacoes = ProfessorN::where('professor_id', '=', $id)->get();


        return view('layouts.main_po', ['notificacoes' => $notificacoes]);
    }


    function home()
    {

        set_time_limit(0);
        ini_set("memory_limit", -1);
        ini_set('max_execution_time', 0);
        $id = Auth::guard('professor')->user();

        $ids = Auth::id();

        $mytime = Carbon::today();
        $mytime->toDateString();

        //   $estudantes = DB::select(" SELECT classe FROM estudantes WHERE id = $id ");

        //$estudantes = Classe::where("id","=",$id->classe)->get();

        $provas = Plano::where("professor_id", "=", "$ids")->get();
        $planos = Plano::where("professor_id", "=", "$ids")->get();
        $faltas = FaltaProfessor::where('liceu', '=', $id->liceu)->where("professor_id", "=", "$id")->get();
        $orientacoes = Orientacoe::where('liceu', '=', $id->liceu)->where("professor_id", "=", "$ids")->get();
        $formacoes = Formacao::where('liceu', '=', $id->liceu, )->where("professor_id", "=", "$ids")->get();
        $notas = EMark::where('liceu', '=', $id->liceu, )->where("professor_id", "=", "$ids")->get();
        $notasx = EMark::where('liceu', '=', $id->liceu, )->where("professor_id", "=", "$ids")->limit(5)->get();
        $notass = DMark::where('liceu', '=', $id->liceu, )->where("professor_id", "=", "$ids")->get();
        $notasss = DMark::where('liceu', '=', $id->liceu, )->where("professor_id", "=", "$ids")->limit(5)->get();
        $noti = ProfessorN::where('liceu', '=', $id->liceu, )->where("professor_id", "=", "$ids")->get();
        $soli = PDoc::where('liceu', '=', $id->liceu, )->where("professor_id", "=", "$ids")->get();
        $dias = Dia::all();
        $trimestres = Trimestre::all();
        $links = PLink::where('liceu', '=', $id->liceu)->get();
        $professores = Professor::where("id", "=", "$ids")->get();
        $tarefas = PTarefa::where("professor_id", "=", "$ids")->get();


        $count_provas = count($provas);
        $count_faltas = count($faltas);
        $count_orientacoes = count($orientacoes);
        $count_formacoes = count($formacoes);
        $count_notas = count($notas);
        $noti = count($noti);
        $soli = count($soli);

        return view(
            'professor.home',
            [
                'count_provas' => $count_provas,
                'count_orientacoes' => $count_orientacoes,
                'count_notas' => $count_notas,
                'tarefas' => $tarefas,
                'links' => $links,
                'dias' => $dias,
                'notasx' => $notasx,
                'noti' => $noti,
                'planos' => $planos,
                'provas' => $provas,
                'professores' => $professores,
                'trimestres' => $trimestres,
                'soli' => $soli,
                'notasss' => $notasss,
                'mytime' => $mytime,
                'count_formacoes' => $count_formacoes,
                'count_faltas' => $count_faltas
            ]
        );


    }




    public function imprimir()
    {

        $id = Auth::id();

        $provas = EMark::where('professor_id', '=', $id)->get();

        return view('professor.imprimir', ['provas' => $provas]);
    }

    public function __construct(Excel $excel)
    {
        $this->excel = $excel;

    }

    /*
        public function imprimir_boletim(){

             $id = Auth::id();

           //  return $this->excel->download( new ProfExport, 'caderneta_trimestral.xlsx');   
            
           
            $notas = DMark::where('professor_id', '=', $id)->get();
             return \PDF::loadView('professor.caderneta_trimestral', compact('notas'))
                        ->setPaper('a3')
                        ->stream()
                         ->download('boletim_trimestral.pdf');  
                 
             }
        
    */


    function estudantes()
    {
        $id = Auth::guard('professor')->user();

        $estudantes = DB::table('estudantes')
            ->select('classe', 'liceu', DB::raw('count(*) as total'))
            ->where("liceu", "=", "$id->liceu")
            ->groupBy('classe', 'liceu')
            ->get();

        return view('professor.estudantes', ['estudantes' => $estudantes]);


    }



    public function ver_turma_as($classe)
    {

        $id = Auth::guard('professor')->user();


        $estudantes = Estudante::where("liceu", "=", "$id->liceu")->where('classe', '=', $classe)->get();


        return view('professor.adec', ['estudantes' => $estudantes]);
    }

    public function ver_dado_estudante($id)
    {

        $estudantes = Estudante::findOrFail($id);

        return view('professor.ver_dados_estudante', ['estudantes' => $estudantes]);
    }

    public function deletar_plano($id)
    {

        Plano::findOrFail($id)->delete();

        return redirect()->back()->with('success', 'Plano eliminado Com sucesso');
    }


    public function editar_plano($id)
    {

        $ids = Auth::id();

        $planos = Plano::find($id);
        $professores = Professor::where('id', '=', $ids)->get();

        $disciplinas = DB::table('mix_d_p_s')
            ->select('disciplina_id', 'professor_id', DB::raw('count(*) as total'))->where('professor_id', '=', $ids)
            ->groupBy('disciplina_id', 'professor_id')
            ->get('disciplina_id');

        $trimestres = Trimestre::all();

        return view('professor.editar_plano', [
            'planos' => $planos,
            'trimestres' => $trimestres,
            'professores' => $professores,
            'disciplinas' => $disciplinas
        ]);

    }


    function editar_pl(Request $request, $id)
    {

        $plano = Plano::find($id);

        $plano->trimestre_id = $request->input('trimestre_id');
        $plano->tipo = $request->input('tipo');
        $plano->data = $request->input('data');
        $plano->liceu = $request->input('liceu');
        $plano->tema = $request->input('tema');
        $plano->disciplina = $request->input('disciplina');
        $plano->classe = $request->input('classe');
        if ($request->hasFile('plano') && $request->file('plano')->isValid()) {

            $requestImage = $request->plano;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

            $requestImage->move(public_path('/media/professor/planos'), $imageName);

            $plano->plano = $imageName;

        }
        $plano->update();

        return redirect()->route('professor.plano_enviados')->with('success', 'Plano Actualizado das com sucesso');

        // return redirect()->back()->with('fail','Notas não Enviadas');
    }



    function criar_tarefa(Request $request)
    {
        $id = Auth::id();

        $tarefa = new PTarefa();

        $tarefa->titulo = $request->titulo;
        $tarefa->descricao = $request->descricao;
        $tarefa->data_tempo = $request->data_tempo;
        $tarefa->tipo = $request->tipo;
        $tarefa->liceu = $request->liceu;
        $tarefa->classe = $request->classe;
        $tarefa->professor_id = $id;

        $save = $tarefa->save();


        if ($save) {
            return redirect()->route('professor.home')->with('success', 'Tarefa crida com sucesso');

        } else {
            return redirect()->back()->with('fail', 'Plano não Enviado');
        }

        // return redirect()->back()->with('fail','Notas não Enviadas');
    }


    function editar_tarefa(Request $request, $id)
    {

        $tarefa = Ptarefa::find($id);

        $tarefa->titulo = $request->input('titulo');
        $tarefa->tipo = $request->input('tipo');
        $tarefa->data_tempo = $request->input('data_tempo');
        $tarefa->liceu = $request->input('liceu');
        $tarefa->tema = $request->input('descricao');
        $tarefa->classe = $request->input('classe');

        $tarefa->professor_id = $id;
        $tarefa->update();

        return redirect()->route('professor.home')->with('success', 'Tarefa Actualizado das com sucesso');

        // return redirect()->back()->with('fail','Notas não Enviadas');
    }


    public function deletar_orientacao($id)
    {

        Orientacoe::findOrFail($id)->delete();

        return redirect()->back()->with('success', 'Orientação eliminado Com sucesso');
    }

    function alterar_senha()
    {
        return view('professor.alterar_senha');

    }


    public function alterar_s(Request $request)
    {
        # Validation
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|confirmed|min:8|max:30',
        ]);


        #Match The Old Password
        if (!Hash::check($request->old_password, auth()->user()->password)) {
            return back()->with("error", "A Senha antiga esta incorrecta!");
        }


        #Update the new Password
        Professor::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->new_password),
            'c_password' => $request->new_password_confirmation,
        ]);

        return back()->with("status", "Senha Alterada com Sucesso!");
    }




    function imprimir_turmas()
    {

        $id = Auth::id();

        $professores = Professor::where('id', '=', $id)->get();

        return view('professor.imprimir', ['professores' => $professores]);

    }


    /*
    function addNotesSamples(){

        $type_prova = Typ_Prova::all();
        
        $data = [];
        
        foreach($type_prova as $item){
          array_push($data, [
            "type" => $item->id,
            "value" => 0
          ]);
        }
      
        return $data;

      }




    function addDisciplina(){

    $disciplinas = Disciplina::all();

        $data = [];

        foreach($disciplinas as $disciplina){
        array_push($data,[
            "id" => $disciplina->id,
            "name" => $disciplina->disciplina,
            "notes" => $this->addNotesSamples()
        ]);
        }

        return $data;


    }

    function filterDisciplina($disciplinaId, $ArrangeDisciplina){
        for ($i=0; $i < count($ArrangeDisciplina) ; $i++) { 
          if($ArrangeDisciplina[$i]["id"] == $disciplinaId)
            return $ArrangeDisciplina[$i];
        }
      }


    public function imprimir_boletim($classe){

        $id = Auth::id();


        $notas = DMark::where('professor_id', '=', $id )->where('classe', '=',$classe)
        ->get();
        
        $new_data = [];
        $disciplinas = $this->addDisciplina();


        foreach( $notas as $student){
            if(!isset($new_data[$student->estudante_id]) || !is_array($new_data[$student->estudante_id]) )
            $new_data[$student->estudante_id] = [];
        
            if(!isset($new_data[$student->estudante_id]['name']))
            $new_data[$student->estudante_id]['name'] = $student->estudante->name;
        
            if(!isset($new_data[$student->estudante_id][$student->mix_id]) || !is_array($new_data[$student->estudante_id][$student->mix_id]))
            $new_data[$student->estudante_id][$student->mix_id] = $this->filterDisciplina($student->mix_id, $disciplinas);
        
            for($i = 0; $i < count($new_data[$student->estudante_id][$student->mix_id]['notes']); $i++){
            if( $new_data[$student->estudante_id]
            [$student->mix_id]["notes"][$i]["type"] == $student->tipo_id)
                $new_data[$student->estudante_id][$student->mix_id]["notes"][$i]["value"] = $student->nota;
            }

        

        }

        
    //dd($new_data);
        return \PDF::loadView('professor.caderneta_trimestral',['new_data'=>$new_data,
    ])
               ->setPaper('a1', 'landscape')->stream();

               // ->download('boletim_trimestral.pdf');  

              

    }
    */
    function addNotesSamples()
    {

        $type_prova = Typ_Prova::where('id', '=', 1)->get();

        $data = [];


        foreach ($type_prova as $item) {


            array_push($data, [
                "type" => $item->id,
                "value" => 0,
                "inte" => $item->id++,
            ]);
        }

        return $data;

    }




    function addDisciplina()
    {

        $disciplinas = Disciplina::all();

        $data = [];

        foreach ($disciplinas as $disciplina) {
            array_push($data, [
                "id" => $disciplina->id,
                "name" => $disciplina->disciplina,
                "notes" => $this->addNotesSamples()
            ]);
        }

        return $data;


    }

    function filterDisciplina($disciplinaId, $ArrangeDisciplina)
    {
        for ($i = 0; $i < count($ArrangeDisciplina); $i++) {
            if ($ArrangeDisciplina[$i]["id"] == $disciplinaId)
                return $ArrangeDisciplina[$i];
        }
    }


    public function imprimir_boletim($classe)
    {

        $id = Auth::id();
        $ids = Auth::guard('professor')->user();


        $notas = DMark::where('professor_id', '=', $id)->where('classe', '=', $classe)
            ->get();

        $notass = DMark::where('professor_id', '=', $id)
            ->where('classe', '=', $classe)
            ->limit(1)
            ->get();

        $new_data = [];
        $avaliacao = [];

        $disciplinas = $this->addDisciplina();


        foreach ($notas as $student) {
            if (!isset($new_data[$student->estudante_id]) || !is_array($new_data[$student->estudante_id]))
                $new_data[$student->estudante_id] = [];


            if (!isset($new_data[$student->estudante_id][$student->mix_id]) || !is_array($new_data[$student->estudante_id][$student->mix_id]))
                $new_data[$student->estudante_id][$student->mix_id] = $this->filterDisciplina($student->mix_id, $disciplinas);

            for ($i = 0; $i < count($new_data[$student->estudante_id][$student->mix_id]['notes']); $i++) {
                if ($new_data[$student->estudante_id][$student->mix_id]["notes"][$i]["type"] == $student->tipo_id)
                    $new_data[$student->estudante_id][$student->mix_id]["notes"][$i]["value"] = $student->nota;

            }




        }


        $users = DMark::where('professor_id', '=', $id)
            ->where('classe', '=', $classe)
            ->where('tipo_id', '=', 1)
            ->get();



        $estudantes = Estudante::where('liceu', '=', $ids->liceu)->where('classe', '=', $classe)
            ->get();
        // dd($new_data);
        return \PDF::loadView('professor.caderneta_trimestral', [
            'disciplinas' => $new_data,
            'estudantes' => $estudantes,
            'notass' => $notass,
        ])
            ->setPaper('a1')->stream();

        // ->download('boletim_trimestral.pdf');  



    }

}