@extends('layouts.main')

@section('title', 'Gestor Tarefas')

@section('content')

<main role="main">
        <div class="row">
            <div class="container col-sm-8 offset-md-2">
                <div class="card border">
                    <div class="card-header">
                        <h5 class="card-title">Tarefas</h5>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-hover" id="tabelalistagem">
                            <thead>
                                <tr>
                                    <th>Código</th>
                                    <th>Título</th>
                                    <th>Tipo</th>
                                    <th>Prioridade</th>
                                    <th>Data de abertura</th>
                                    <th>Responsavel</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($tarefas as $c)
                                <tr>
                                    <td>{{$c->id}}</td>
                                    <td>{{$c->titulo}}</td>
                                    <td>{{$c->tipo}}</td>
                                    <td>{{$c->prioridade}}</td>
                                    <td>{{$c->data}}</td>
                                    <td>{{$c->responsavel}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="{{ asset('js/app.js') }}" type="text/javascript"></script>



@endsection