@extends('layout.app')
@section('content_page')
 <div class="jumbotron text-center">
                  <h1>Relatório de Usuários</h1>
              </div>
              <a class="btn btn-primary" href="/users/create">Inserir ADM</a>
                  <table class="table table-bordered table-striped">
                      <thead>
                        <tr>
                          <th>Nome</th>
                          <th>Título de Eleitor</th>
                          <th>CPF</th>
                          <th>Data de Nascimento</th>
                        </tr>
                      </thead>
                      <tbody>
                    @foreach($users as $u)
                      <tr>
                      <td>{{$u->name}}</td>
                      <td>{{$u->titEleitor}}</td>
                      <td>{{$u->cpf}}</td>
                      <td>{{$u->dataNascimento}}</td>
                    </tr>
                    @endforeach
                    </tbody>
                    </table>
@endsection