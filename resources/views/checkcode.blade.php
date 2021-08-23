@extends('layout')

@section('content')
<div class = "text-center mt-5" >
    <form class="verification" action="checkcode" method="POST" style="max-width:300px;margin:auto;">
        <h1 class="h5 mb-3 font-weight-normal">please enter the code from  your email</h1>
        @csrf
        <input type="text" name="code"  class="form-control mb-3" placeholder="verification code" required  >
        
        <div class="mt-3">
            <button class="btn btn-lg btn-success btn-block" type="submit">submit</button>
        </div>
    </form>
</div>
@stop