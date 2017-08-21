@include('layout.header')
    @include('layout.sidebar')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        @yield('Inserir Projetos')
        <!-- Main content -->
        <section class="content">
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
                      <label for="titulo" class="control-label">Título</label>
                      <input type="text" name="titulo" class="form-control" placeholder="Titulo">
                    </div>

                    <div class="form-group">
                      <label for="subtitulo">Subtítulo</label>
                      <input type="text" name="subtitulo" class="form-control" placeholder="subtitulo">
                    </div>

                    <div class="form-group">
                      <label for="descriçao">Descrição</label>
                      <input type="text" name="descriçao" class="form-control" placeholder="descriçao">
                    </div>

                    <div class="form-group">
                      <label for="metaVotos">Meta de Votos</label>
                      <input type="number" name="metaVotos" class="form-control" placeholder="metaVotos">
                    </div>
                    <input type="submit"class="btn btn-primary" name ="botaoSalvar" value="Salvar">
                    <a href="/projetos" class="btn btn-primary" >Voltar</a>
                  </div>
              </div>
          @endsection
        @yield('conteudo')
      </div><!-- /.content-wrapper -->
            <!-- Your Page Content Here -->
            @yield('content_page')

        </section><!-- /.content -->


@include ('layout.footer')
