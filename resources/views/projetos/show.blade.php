@extends('layout.app')
@section('content_page')
          <!-- ifs para separar a exclusao de votacao -->
          @if (Auth::user()->type==1)
          <h1>Excluir Projetos</h1>
          <div class="container-fluid">
            @else
            <div class="container">
                <div class="row">
                  <div class="col-md-6">
                    <h1>Projeto: {{$projetos->titulo}}</h1>
                    <h2>{{$projetos->descriçao}}</h2>
                    @endif
                    <p>Id: {{$projetos->idProjeto}}</p>
                    <p>Título :{{$projetos->titulo}}</p>
                    <p>Sub-título :{{$projetos->subTitulo}}</p>
                    @if (Auth::user()->type==1)

                    <form method="post" action="/projetos/{{$projetos->idProjeto}}">
                      <!-- cria tokens para as rotas -->
                      {{csrf_field()}}
                      <!-- cria input do tipo RAIDEN e cria a rota para o methodo pretendido-->
                      {{method_field('DELETE')}}
                      <input type="submit" class="btn btn-primary" value="Confirmar Exclusão">
                      <a href="/projetos" class="btn btn-primary">Voltar</a>
                    </form>
                    @else
                    <a href="{{route('votar', ['idProjeto'=> $projetos->idProjeto]) }}" class="btn btn-warning">Votar</a>
                      <a href="/projetos" class="btn btn-primary">Outros projetos</a>
                    @endif

                  </div>

                  <div class="col-md-6">
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam accumsan, massa tincidunt porttitor viverra, diam magna varius tellus, ac tincidunt ligula mi nec arcu. In ac nisl vehicula, luctus nulla nec, pulvinar ante. Cras in eros ac eros faucibus efficitur. Nam efficitur, dolor aliquam blandit venenatis, velit orci iaculis enim, eget commodo magna justo ac risus. Nullam accumsan, justo ac consequat gravida, lectus tellus mollis metus, sed interdum mi nisi vitae dolor. </p>
                  </div>
                  @endsection
              </div>
