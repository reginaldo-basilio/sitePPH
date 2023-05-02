@extends('layouts.main')

@section('title', 'Gestor Tarefas')

@section('content')

<main role="main">
        <div class="row">
            <div class="container col-sm-8 offset-md-2">
                <div class="card border">
                    <div class="card-header">
                        <h5 class="card-title">Cadastro de tarefa</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('salvar_tarefa') }}" method="POST">
                        @csrf    
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">    
                                                 
                            <div class="form-group">
                                <label for="titulo">Título da tarefa</label>
                                <input type="text" class="form-control" name="titulo" id="titulo" >
                            </div> 
                            <div class="list-group">
                            <label for="tipo">Tipo:</label>
                                <select id="tipo" name="tipo">
                                <option value="vazio"></option>    
                                <option value="incidente">Incidente</option>
                                <option value="servico">Solicitação de Serviço</option>
                                <option value="melhorias">Melhorias</option>
                                <option value="projetos">Projetos</option>
                                </select>
                            </div>  
                            <div class="list-group">
                            <label for="prioridade">Prioridade:</label>
                                <select id="prioridade" name="prioridade">
                                <option value="vazio"></option>    
                                <option value="alta">Alta</option>
                                <option value="media">Média</option>
                                <option value="baixa">Baixa</option>
                                <option value="sem-prioridade">Sem prioridade</option>
                                </select>
                            </div> 
                            <div class="form-group">
                            <label for="descricao">Descrição:</label>
                                <textarea id="descricao" name="descricao"></textarea>

                                <script src="https://cdn.tiny.cloud/1/<seu-codigo-api>/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
                                <script>
                                tinymce.init({
                                    selector: 'textarea',
                                    plugins: 'advlist autolink lists link image charmap print preview hr anchor pagebreak',
                                    toolbar_mode: 'floating',
                                    tinycomments_mode: 'embedded',
                                    tinycomments_author: 'Autor',
                                });
                                </script>
                            </div>
                            
                            <div class="form-group">
                                <label for="situacao">Situacao</label>
                                <input type="text" class="form-control" name="situacao" id="situacao" >
                            </div>  
                            <br>
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