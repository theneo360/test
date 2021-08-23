@extends('layout')

@section('content')
<div class = "text-center mt-5" >
    <form class="form-signup" action="contact" method="POST" style="max-width:300px;margin:auto;">
        <h1 class="h3 mb-3 font-weight-normal">Contact</h1>
        @csrf

        <span style="color:red">
                @error('email'){{$message}}@enderror
        </span>
        <input type="email" name ="email"  class="form-control mb-3" placeholder="Email address"required  >
        
        <span style="color:red">
                @error('name'){{$message}}@enderror
        </span>
        <input type="text" name ="name" class="form-control mb-3" placeholder="Name" required >
        
        <span style="color:red">
                @error('subject'){{$message}}@enderror
        </span>
        <input type="text" name="subject"  class="form-control mb-3" placeholder="subject" required >
        
        <span style="color:red">
                @error('message'){{$message}}@enderror
        </span>
        <textarea type="text" name="message" class="form-control mb-3" placeholder="Message " required  ></textarea>
        <div class="mt-3">
            <button class="btn btn-lg btn-success btn-block" type="submit">submit</button>
        </div>
    </form>
</div>
@stop