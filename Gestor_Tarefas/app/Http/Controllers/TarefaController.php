<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tarefa;

class TarefaController extends Controller
{
    public function index(){

        $tarefas = Tarefa::all();
        return view('/tarefa/listagem_tarefa', ['tarefas'=> $tarefas]);

    }

    public function create(){
        return view('tarefa.cadastro_tarefa');
    }

    public function store(Request $request)
    {
        Tarefa::create([
            'titulo' => $request -> titulo,
            'tipo' => $request -> tipo,
            'prioridade' => $request -> prioridade,
            'descricao' => $request -> descricao,
            'situacao' => "aberta",#$request -> situacao,
        ]);
        return "Tarefa cadastrada com sucesso!";
    }


}
