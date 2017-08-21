@extends('layout.app')
@section('content_page')
 <div class="jumbotron text-center">
                  <h1>Painel de Projetos</h1>
              </div>
                  <table class="table table-bordered table-striped">
                      <thead>
                        <tr>
                          <th>Código</th>
                          <th>Título</th>
                          <th>Sub-título</th>
                          <th>Votar</th>
                        </tr>
                      </thead>
                      <tbody>
                    @foreach($projetos as $p)
                      <tr>
                      <td>{{$p->idProjeto}}</td>
                      <td>{{$p->titulo}}</td>
                      <td>{{$p->subTitulo}}</td>
                      <td><a href="/projetos/{{ $p->idProjeto}}"><i class="fa fa-pencil fa-fw"></i>Votar</a></td>
                    </tr>
                    @endforeach
                    </tbody>
                    </table>
@endsection