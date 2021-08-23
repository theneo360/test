@extends('layout')

@section('content')
<div class = "text-center mt-5" >
    <form class="form-signup" action="signup" method="POST" style="max-width:300px;margin:auto;">
    @csrf
        <img class="mt-4 mb-4" src="{{ asset('images/user.png') }}" alt="" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal">Please sign up</h1>
       <!-- {{$errors}}  -->
       
        <input type="email" name="email"  class="form-control mb-3" placeholder="Email address" required  >
             
        <input type="text" name="phone"  class="form-control mb-3" placeholder="Phone number" required>
        
        
        <input type="text" name="name" id="inputEmail" class="form-control mb-3" placeholder="Name" required>
        
        
        <input type="text" name="lastname" id="inputEmail" class="form-control mb-3" placeholder="Last Name" required >
       
        <input type="password" name="password" id="inputPassword" class="form-control mb-3" placeholder="Password"required >
       
        <input type="password" name="Repassword" id="inputEmail" class="form-control mb-3" placeholder="Re-type password " required >
        <span class="text-danger">
            {{ $titl ?? '' }}
            </span>
        <div class="mt-3">
            <button class="btn btn-lg btn-success btn-block" type="submit">Sign up</button>
        </div>
    </form>
</div>
@stop