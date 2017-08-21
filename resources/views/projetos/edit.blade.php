
@include('layout.header')
    @include('layout.sidebar')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        @yield('Editar_Projetos')
      <!-- Main content -->
        <section class="content">
          @section('conteudo')
          <div class="jumbotron text-center">
            <h1>Editar Projetos</h1>
          </div>
          <div class="row">
            <div class="col-sm-4">
              <form method ="post" action="/projetos/{{$projetos->idProjeto}}" class="horizontal">
                <!-- comando para reconhecer o cliente -->
                {{csrf_field()}}
                <!-- conversão do metodo post -->
                {{method_field('PATCH')}}
                <div class="form-group">
                  <label for="titulo" class="control-label">Titulo</label>
                  <input type="text" name="titulo" class="form-control" placeholder="titulo" value="{{$projetos->titulo}}">
                </div>
                <div class="form-group">
                  <label for="subTitulo">Subtitulo</label>
                  <input type="text" name="subTitulo" class="form-control" placeholder="subTitulo" value="{{$projetos->subTitulo}}">
                </div>
                <div class="form-group">
                  <label for="descriçao">Descrição</label>
                  <input type="text" name="descriçao" class="form-control" placeholder="descriçao" value="{{$projetos->descriçao}}">
                </div>
                <div class="form-group">
                  <label for="metaVotos">Meta de Votos</label>
                  <input type="number" name="metaVotos" class="form-control" placeholder="metaVotos" value="{{$projetos->metaVotos}}">
                </div>
                <div class="form-group">
                  <label for="statusProjeto">Status</label>
                  <input type="number" name="statusProjeto" class="form-control" placeholder="statusProjeto" value="{{$projetos->statusProjeto}}">
                </div>
                <input type="submit" class="btn btn-primary" name ="botaoSalvar" value="Salvar">
                <a href="/projetos" class="btn btn-primary">Voltar</a>

              </div>
          </div>
          @endsection
        @yield('conteudo')
      @yield('content_page')
        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->
    @include ('layout.footer')
