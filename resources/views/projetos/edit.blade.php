@extends('principal')
@section('conteudo')
<div class="jumbotron text-center">
  <h1>Editar Projetos</h1>
</div>
</div>
    <div class="row">
      <div class="col-sm-4">
        <form method ="post" action="/projetos/{{$projetos->id}}" class="horizontal">
          <!-- comando para reconhecer o cliente -->
          {{csrf_field()}}
          <!-- conversão do metodo post -->
          {{method_field('PATCH')}}
          <div class="form-group">
            <label for="nome" class="control-label">Titulo</label>
            <input type="text" name="titulo" class="form-control" placeholder="titulo" value="{{$projetos->titulo}}">
          </div>
          <div class="form-group">
            <label for="subtitulo">Subtitulo</label>
            <input type="text" name="subtitulo" class="form-control" placeholder="subtitulo" value="{{$projetos->subtitulo}}">
          </div>
          <div class="form-group">
            <label for="descricao">Descricao</label>
            <input type="text" name="descricao" class="form-control" placeholder="descricao" value="{{$projetos->descricao}}">
          </div>
          <div class="radio">
            <label>
              <input type="radio" name="status" value="true">Em Andamento
            </label>
          </div>
          <div class="radio">
            <label>
              <input type="radio" name="status" value="false">Encerrado
            </label>
          </div>
          <input type="submit" name ="botaoSalvar" value="Salvar">
        </div>
    </div>
@endsection
