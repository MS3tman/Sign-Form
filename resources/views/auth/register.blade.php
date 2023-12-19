@extends('layout.app')
@section('content')
<form method="post" action="{{route('to_register')}}">
    @csrf
    <div >
        <div class="row mb-3">
            <label for="inputEmail3" class="col-sm-2 col-form-label">First Name</label>
            <div class="col-sm-3">
                <input type="text" class="form-control" id="inputEmail3" placeholder="First Name" name="first_name" required>
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Last Name</label>
            <div class="col-sm-3">
                <input type="text" class="form-control" id="inputPassword3" placeholder="Last Name" name="last_name" required>
            </div>
        </div>

        <div class="row mb-3">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-5">
            <input type="email" class="form-control" id="inputEmail3" placeholder="example@gmail.com" name="email" required>
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-5 ">
            <input type="password" class="form-control" id="inputPassword3" placeholder="Password" name="password" required>
            </div>
        </div>
            <div>
                <button class="d-inline p-2 btn btn bg-primary text-white" type="submit">Sign Up</button>
                <a class="btn btn-dark" href="/auth/github" role="button">Register With GitHub</a>
                <a class="btn btn-danger" href="/auth/google" role="button">Register With Google</a>
            </div>
            
    </div>
</form>
        
@endsection