@extends('principal')
@section('conteudo')
<div class="jumbotron text-center">
          <h1>Inserir Projetos</h1>
</div>
    <div class="row">
      <div class="col-sm-4">
        <form method ="post" action="/projetos" class="horizontal">
          <!-- comando para reconhecer o cliente -->
          {{csrf_field()}}
          <div class="form-group">
            <label for="titulo" class="control-label"></label>
            <input type="text" name="titulo" class="form-control" placeholder="Titulo">
          </div>

          <div class="form-group">
            <label for="subtitulo">Subtítulo</label>
            <input type="text" name="subtitulo" class="form-control" placeholder="subtitulo">
          </div>

          <div class="form-group">
            <label for="descricao">Descricao</label>
            <input type="text" name="descricao" class="form-control" placeholder="descricao">
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

          <div class="form-group">
            <label for="metaVotos">Meta de Votos</label>
            <input type="number" name="metaVotos" class="form-control" placeholder="metaVotos">
          </div>
          <input type="submit" name ="botaoSalvar" value="Salvar">
        </div>
    </div>
@endsection
