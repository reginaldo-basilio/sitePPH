@extends('layouts.main')

@section('title', 'Cadastrar usuário')

@section('content')

<main role="main">
        <div class="row">
            <div class="container col-sm-8 offset-md-2">
                <div class="card border">
                    <div class="card-header">
                        <h5 class="card-title">Cadastro de usuário</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('salvar_usuario') }}" method="POST">
                        @csrf    
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">    
                                                 
                            <div class="form-group">
                                <label for="nomeUsuario">Nome de usuário</label>
                                <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome">
                            </div> <br>
                            <div class="form-group">
                                <label for="email">E-mail</label>
                                <input type="text" class="form-control" name="email" id="email" placeholder="e-mail">
                            </div>  <br>
                            <div class="form-group">
                                <label for="senha">Senha</label>
                                <input type="text" class="form-control" name="senha" id="senha" placeholder="Senha">
                            </div><br>
                           
                            <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
                            <button type="reset" class="btn btn-danger btn-sm">Cancelar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="{{ asset('js/app.js') }}" type="text/javascript"></script>

@endsection