@extends('layout')

@section('content')
<div class = "text-center mt-5" >
    <form class="verification" action="forgot" method="POST" style="max-width:300px;margin:auto;">
        <h1 class="h5 mb-3 font-weight-normal">please enter  your email</h1>
        @csrf
        <input type="email" name="email"  class="form-control mb-3" placeholder="email" required  >
        
       
        <span class="text-success">
            {{ $titl ?? '' }}
            </span>
            <span class="text-danger">
            {{ $titles ?? '' }}
            </span>
            

        <div class="mt-3">
            <button class="btn btn-lg btn-success btn-block" type="submit">submit</button>
        </div>
    </form>
</div>
@stop