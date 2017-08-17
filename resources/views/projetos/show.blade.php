@extends('principal')
@section('conteudo')
<h1>Excluir Projetos</h1>

<a href="/projetos">Voltar</a>

<p>Id:{{$projetos->id}}</p>
<p>Nome:{{$projetos->titulo}}</p>
<p>Nome Fantasia:{{$projetos->subtitulo}}</p>

<form method="post" action="/projetos/{{$projetos->id}}">
  <!-- cria tokens para as rotas -->
  {{csrf_field()}}
  <!-- cria input do tipo RAIDEN e cria a rota para o methodo pretendido-->
  {{method_field('DELETE')}}
  <input type="submit" value="Confirmar Exclusão">
</form>

@endsection
