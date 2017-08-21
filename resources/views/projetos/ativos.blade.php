@extends('layout.app')
@section('content_page')
 <div class="jumbotron text-center">
                  <h1>Painel de Projetos</h1>
              </div>
                  <h3>Projetos Ativos</h3>
                  <table class="table table-bordered table-striped">
                      <thead>
                        <tr>
                          <th>Código</th>
                          <th>Título</th>
                          <th>Sub-título</th>
                          <th>Descição</th>
                          <th>metaVotos</th>
                        </tr>
                      </thead>
                      <tbody>
                    @foreach($ativos as $a)
                      <tr>
                      <td>{{$a->idProjeto}}</td>
                      <td>{{$a->titulo}}</td>
                      <td>{{$a->subTitulo}}</td>
                      <td>{{$a->descriçao}}</td>
                      <td>{{$a->metaVotos}}</td>
                    </tr>
                    @endforeach
                    </tbody>
                    </table>
@endsection