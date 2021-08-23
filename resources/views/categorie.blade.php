@extends('layout')

@section('content')
<p class=" text-center mt-5 text-success h3" >NOS PRODUITS </p>
<div class="row row-cols-1 row-cols-md-3 g-4 text-center">
        @foreach($result as $item)
  <div class="col">
    <div class="card h-100">
    <a href="detail/{{$item->name_item}}">
      <img src="{{ asset('images/'.$item->name_item.'.jpg') }}" class="card-img-top" alt="...">
      </a>
      <div class="card-body">
        <h5 class="card-title">{{$item->name_item}}</h5>
        <p class="card-text">{{$item->price}} DH</p>
        <a href="detail.{{$item->name_item}}">
        <button class="btn btn-lg btn-success btn-block" >SEE PRODUCT</button>
        </a>
      </div>
    </div>
  </div>
  @endforeach
  
</div>
<div class="d-flex justify-content-center  mt-5">
{{$result->links()}}
 </div>
 
    
    

@stop