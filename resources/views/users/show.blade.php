@extends('layout.app)

@section('content_page')


<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Editar Usuário</div>
                <div class="panel-body">

                    <form method="post" action="/users/{{ $user->id }}">
                      {{ method_field('DELETE') }}
                      {{ csrf_field() }}

                        <div class="form-group">
                            <label for="id" class="col-md-4 control-label">ID</label>
                            <div class="col-md-6">
                                <label for="ID" class="col-md-4 control-label">{{ $user->id }}</label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="nome" class="col-md-4 control-label">Nome</label>
                            <div class="col-md-6">
                                <label for="nome" class="col-md-4 control-label">{{ $user->nome }}</label>
                            </div>
                        </div>

                     
                        <div class="form-group">
                            <label for="email" class="col-md-4 control-label">e-Mail</label>
                            <div class="col-md-6">
                                <label for="email" class="col-md-4 control-label">{{ $user->email }}</label>
                            </div>
                        </div>

                
                        <div class="form-group">
                            <label for="cpf" class="col-md-4 control-label">CPF</label>
                            <div class="col-md-6">
                                <label for="cpf" class="col-md-4 control-label">{{ $user->cpf }}</label>
                            </div>
                        </div>

                           <div class="form-group">
                            <label for="dataNascimento" class="col-md-4 control-label">Data de Nascimento</label>
                            <div class="col-md-6">
                                <label for="dataNascimento" class="col-md-4 control-label">{{ $user->dataNascimento }}</label>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <a href="/users/{{ $user->id }}/edit" class="btn btn-primary">Editar</a>
                                <input type="submit" class="btn btn-danger" value="Excluir"/>
                                <a href="/users" class="btn btn-primary">Voltar</a>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
