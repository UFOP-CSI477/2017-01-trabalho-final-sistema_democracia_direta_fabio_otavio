@extends('layout.app')
@section('content_page')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Criar Usuário</div>
                <div class="panel-body">

                    <form class="form-horizontal" role="form" method="POST" enctype="multipart/form-data" action="/users">
                      {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="descricao" class="col-md-4 control-label">Nome</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="" required autofocus>
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">e-Mail</label>
                            <div class="col-md-6">
                                <input id="email" type="text" class="form-control" name="email" value="" required autofocus>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                            <div class="form-group{{ $errors->has('login') ? ' has-error' : '' }}">
                            <label for="login" class="col-md-4 control-label">Login</label>
                            <div class="col-md-6">
                                <input id="login" type="text" class="form-control" name="login" value="" required autofocus>
                                @if ($errors->has('login'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('login') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Senha</label>
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" value="" required autofocus>
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                         <div class="form-group{{ $errors->has('cpf') ? ' has-error' : '' }}">
                            <label for="cpf" class="col-md-4 control-label">CPF</label>
                            <div class="col-md-6">
                                <input id="cpf" type="text" class="form-control" name="cpf" value="" required autofocus>
                                @if ($errors->has('cpf'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('cpf') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('nomeMae') ? ' has-error' : '' }}">
                            <label for="nomeMae" class="col-md-4 control-label">Nome da mãe</label>
                            <div class="col-md-6">
                                <input id="nomeMae" type="text" class="form-control" name="nomeMae" value="" required autofocus>
                                @if ($errors->has('nomeMae'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nomeMae') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                            <div class="form-group{{ $errors->has('titEleitor') ? ' has-error' : '' }}">
                            <label for="titEleitor" class="col-md-4 control-label">Título de Eleitor</label>
                            <div class="col-md-6">
                                <input id="titEleitor" type="text" class="form-control" name="titEleitor" value="1" required autofocus>
                                @if ($errors->has('titEleitor'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('titEleitor') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('type') ? ' has-error' : '' }}">
                            <label for="type" class="col-md-4 control-label">Tipo</label>
                            <div class="col-md-6">
                                <input id="type" type="text" class="form-control" name="type" value="1" required autofocus>
                                @if ($errors->has('type'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('type') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                         <div class="form-group{{ $errors->has('dataNascimento') ? ' has-error' : '' }}">
                            <label for="dataNascimento" class="col-md-4 control-label">Data de Nascimento</label>
                            <div class="col-md-6">
                                <input id="dataNascimento" type="text" class="form-control" name="dataNascimento" value="" required autofocus>
                                @if ($errors->has('dataNascimento'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('dataNascimento') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">Salvar</button>
                                <input type="button" class="btn btn-primary" href="/usuarios" value="Voltar" onClick="JavaScript: window.history.back();">
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
