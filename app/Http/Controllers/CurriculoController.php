<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Mail\currisuloMailSend;

use App\Models\Curriculo;

use App\Models\Escolaridade;

use Illuminate\Support\Facades\Mail;

class CurriculoController extends Controller
{
    public function create(){
        $escolaridades = Escolaridade::all();
        return view('curriculo.create', compact('escolaridades'));
    }

    public function store(Request $request){
        // Recebendo e validando dados
        $formData = $request->validate([
            'nome' => 'required',
            'email' => 'required|email',
            'telefone' => 'required',
            'cargo' => 'required',
            'escolaridade' => 'required|int',
            'arquivo' => 'required|mimes:doc,docx,pdf|max:1024',
        ], [
            'nome.required' => 'Campo NOME é obrigatório!',
            'email.required' => 'Informe um E-MAIL válido!',
            'email.email' => 'Informe um E-MAIL válido!',
            'telefone.required' => 'Campo TELEFONE é obrigatório!',
            'cargo.required' => 'Campo CARGO é obrigatório!',
            'escolaridade.required' => 'Campo ESCOLARIDADE é obrigatório!',
            'arquivo.required' => 'Campo ARQUIVO é obrigatório, deve possuir tamanho max. de 1mb!',
        ]);

        $dataSave = [
            'nome' => $request->nome, 
            'email' => $request->email,
            'telefone' => $request->telefone,
            'cargo' => $request->cargo,
            'escolaridade_id' => intval($request->escolaridade),
            'observacoes' => $request->observacao
        ];

        //dd($dataSave);

        //Add arquivo de curriculo pasta e salvando na base de dados
        if ($request->file()) {
            $nomeArquivo = time().'_'.$request->arquivo->getClientOriginalName();
            $pastaArquivo = $request->file('arquivo')->storeAs('uploads/curriculo', $nomeArquivo, 'public');
            $dataSave['arquivo'] = $pastaArquivo;
        }

        //Salvando curriculo na base de dados
        $curriculo = Curriculo::create($dataSave);

        //dd($curriculo);

        //Enviar email com dados do curriculo
        Mail::to($request->email)->send(new currisuloMailSend($dataSave));

        return redirect('/curriculo/create')->with('success', 'Curriculo salvo e e-mail enviando com sucesso');


    }
}
