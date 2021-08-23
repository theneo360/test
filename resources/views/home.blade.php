@extends('layout')

@section('content')
<div id="carouselExampleControls" class=" carousel slide " data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{ asset('images/test'.$rand1.'.jpg') }}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
    
      <img src="{{ asset('images/test'.$rand2.'.jpg') }}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{ asset('images/test'.$rand3.'.jpg') }}" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<p class=" text-center mt-5 text-success h3" >NOS CATEGORIES </p>

<div class="row align-items-md-stretch">
            @foreach($result as $item)
           
           
      <div class="col-md-6 mt-5 ">
        <p class=" text-center text-success h4  " >{{$item->categorie_item}} </p>
        <div class="h-100 p-5 ">
       <a href="categorie.{{$item->categorie_item}}"><img src="{{ asset('images/categories/'.$item->categorie_item.'.jpg') }}" class="d-block w-100" alt="..."></a> 
        </div>
      </div>
      @endforeach
      
</div>
<div class="d-flex justify-content-center  mt-5">
{{$result->links()}}
 </div>
      
@stop