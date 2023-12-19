@extends('layout.app')
@section('content')
<form method="post" action="{{route('to_login')}}"> 
  @csrf
 <div>
    <div class="row mb-3">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-5">
        <input type="email" class="form-control" id="inputEmail3" placeholder="example@gmail.com" name="email">
        </div>
    </div>
    <div class="row mb-3">
        <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
        <div class="col-sm-5 ">
        <input type="password" class="form-control" id="inputPassword3" name="password">
        </div>
    </div>
    <div class="d-grid gap-2 d-md-block">
        <button class="btn btn-primary" type="submit">Login</button>
    </div>
 </div>
</form>
@endsection