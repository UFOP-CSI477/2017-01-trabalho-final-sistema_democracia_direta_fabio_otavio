@extends('layout.app')
@section('content_page')


<h1>Alterar Perfil</h1>

<hr />
<form method="post" action="{{url('users/updateprofile')}}">
 {{csrf_field()}}

 <div class="form-group">
  <label for="name">Nome:</label>
  <input type="text" name="name" class="form-control">
  <div class="text-danger">{{$errors->first('name')}}</div>
 </div>

 <button type="submit" class="btn btn-primary">Alterar</button>
</form>
@endsection