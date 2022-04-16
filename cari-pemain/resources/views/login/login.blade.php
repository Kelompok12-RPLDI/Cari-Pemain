@extends('partials.navbar')

@section('content')
<?php
    if (isset($_POST['submit'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        if ($username == "admin" && $password == "admin"){
            // header("Location: /dashboard");
            return redirect('/home');
        }
        else{
            echo "Username atau Password salah";
        }
    }
?>
<div class = "row justify-content-center">
    <div class = "col-md-4">
        <main class="form-signin">
        <h1 class="h3 mb-3 fw-normal text-center">Please login</h1>
        <form>
            <div class="form-floating">
                <input type="username" class="form-control" id="floatingInput" placeholder="username">
                <label for="floatingInput">Username</label>
            </div>
            <div class="form-floating mt-3">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
            </div>
            <button class="w-100 btn btn-lg btn-success mt-3" type="submit" href ="/home">Login</button>
        </form>
            <small class= "d-block text-center mt-3">
                Not Registered?
                <a href="/register">Register</a>
            </small>
        </main>
    </div>
</div>
@endsection