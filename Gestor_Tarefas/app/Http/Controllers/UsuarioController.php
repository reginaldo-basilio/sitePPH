<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function index(){

    }

    public function create(){
        return view('usuario.cadastro_usuario');
    }
}
