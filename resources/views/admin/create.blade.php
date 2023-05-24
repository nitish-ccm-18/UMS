@extends('layout.main')
@section('title','Register')

@section('content')
<form action="/users/store" method="post">
    @csrf
    <div class="mb-3">
        <label for="UserName" class="form-label">Full Name</label>
        <input type="text" class="form-control" id="UserEmail" placeholder="John Doe" name="UserName">
    
    </div>
    <div class="mb-3">
        <label for="UserEmail" class="form-label">Email address</label>
        <input type="email" class="form-control" id="UserEmail" placeholder="name@example.com" name="UserEmail">
    
    </div>
    <div class="mb-3">
        <label for="UserPassword" class="form-label">Password</label>
        <input type="password" class="form-control" id="UserPassword" placeholder="********" name="UserPassword">
    </div>
    <div class="mb-3">
        <input type="submit" value="Create User" class="form-control btn btn-primary">
    </div>
</form>
@endsection