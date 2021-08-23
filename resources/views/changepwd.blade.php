@extends('layout')

@section('content')
<div class = "text-center mt-5" >
    <form class="verification" action="changepwd.{{ request()->route('token') }}" method="POST" style="max-width:300px;margin:auto;">
        <h1 class="h5 mb-3 font-weight-normal">please enter  your new password</h1>
        @csrf
        
        <input type="password" name="pwd"  class="form-control mb-3" placeholder="new password" required  >
        <input type="password" name="repwd"  class="form-control mb-3" placeholder="repeat password" required  >
        <span class="text-danger">
            {{ $titl ?? '' }}
            </span>
        <div class="mt-3">
            <button class="btn btn-lg btn-success btn-block" type="submit">submit</button>
        </div>
    </form>
</div>
@stop