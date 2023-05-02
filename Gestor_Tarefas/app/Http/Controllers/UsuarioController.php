<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class UsuarioController extends Controller
{
    public function index(){

       

    }

    public function create(){
        return view('usuario.cadastro_usuario');
    }

    public function store(Request $request)
    {
       
        Usuario::create([
            'nomeUsuario' => $request -> nome,
            'email' => $request -> email,
            'senha' => $request -> senha,
        ]);
        return "Usuário cadastrado com sucesso!";
    }





}
