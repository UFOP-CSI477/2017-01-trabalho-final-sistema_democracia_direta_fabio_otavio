@extends('layout.app')
@section('content_page')


<h1>Mudança de password</h1>

<hr />
<form method="post" action="{{url('users/updatepassword')}}">
 {{csrf_field()}}

 <div class="form-group">
  <label for="password">Nova senha:</label>
  <input type="password" name="password" class="form-control">
  <div class="text-danger">{{$errors->first('password')}}</div>
 </div>

 <button type="submit" class="btn btn-primary">Alterar</button>
</form>
@endsection