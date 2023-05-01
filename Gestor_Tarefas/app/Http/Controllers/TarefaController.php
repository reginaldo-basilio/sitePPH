<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TarefaController extends Controller
{
    public function index(){

    }

    public function create(){
        return view('tarefa.cadastro_tarefa');
    }
}
