@extends('layout.app')
@section('content_page')


<h1>Alterar e-Mail</h1>

<hr />
<form method="post" action="{{url('users/updateemail')}}">
 {{csrf_field()}}

 <div class="form-group">
  <label for="email">Novo e-Mail:</label>
  <input type="email" name="email" class="form-control">
  <div class="text-danger">{{$errors->first('email')}}</div>
 </div>

 <button type="submit" class="btn btn-primary">Alterar</button>
</form>
@endsection