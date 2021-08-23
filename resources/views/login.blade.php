@extends('layout')

@section('content')

<div class = "text-center mt-5" >


    <form action="login" id="login-form" method="POST"  style="max-width:300px;margin:auto;" >
        @csrf
        <img class="mt-4 mb-4" src="{{ asset('images/user.png') }}" alt="" width="72" height="72">
       
       <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
       
       
        <input type="text" name ="email"   class="form-control mb-3" placeholder="Email address" required >
        <span class="text-danger error-text email_err"></span>
        
        <input type="password" name ="password"   class="form-control" placeholder="Password" required >
        <span class="text-danger error-text password_err"></span>
            <div class="checkbox mt-3">
                <label>
                <a class="nav-link " href="forgot" > Forget password ?</a>
                </label>
            </div>
            <span class="text-danger">
            {{ $titl ?? '' }}
            </span>
            <span class="text-success">
            {{ $titls ?? '' }}
            </span>
            <span class="text-success">
            {{ $titlo?? '' }}
            </span>
        <div class="mt-3">
            <button class="btn btn-lg btn-success btn-block" type="submit">login</button>
        </div>
        <div class="checkbox mt-3">
                <label> Don't have account? 
                <a class="nav-link " href="signup" >Sign up?</a>
                </label>
            </div>
    </form>
</div>


    @stop