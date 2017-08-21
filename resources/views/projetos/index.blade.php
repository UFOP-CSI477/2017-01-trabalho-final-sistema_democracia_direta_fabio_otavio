@extends('layout.app')
@section('content_page')
 <div class="jumbotron text-center">
                  <h1>Painel de Projetos</h1>
              </div>
              <a class="btn btn-primary" href="/projetos/create">Inserir</a>
                  <table class="table table-bordered table-striped">
                      <thead>
                        <tr>
                          <th>Código</th>
                          <th>Título</th>
                          <th>Sub-título</th>
                          <th>Descição</th>
                          <th>metaVotos</th>
                          <th>Editar</th>
                          <th>Excluir</th>
                        </tr>
                      </thead>
                      <tbody>
                    @foreach($projetos as $p)
                      <tr>
                      <td>{{$p->idProjeto}}</td>
                      <td>{{$p->titulo}}</td>
                      <td>{{$p->subTitulo}}</td>
                      <td>{{$p->descriçao}}</td>
                      <td>{{$p->metaVotos}}</td>
                      <td><a href="/projetos/{{ $p->idProjeto}}/edit"><i class="fa fa-pencil fa-fw"></i>Editar</a></td>
                      <td><a href="/projetos/{{ $p->idProjeto }}"><i class="fa fa-trash-o fa-fw"></i> Excluir</a></td>
                    </tr>
                    @endforeach
                    </tbody>
                    </table>
@endsection