@extends('layout')

@section('content')

<div class="card mt-5">
	<div class="row">
		<aside class="col-sm-5 border-right">
<article class="gallery-wrap"> 
<div class="img-big-wrap">
  <div> <img src="{{ asset('images/'.$result->name_item.'.jpg') }}" class="d-block w-100"></div>
</div> 

</article> 
		</aside>
		<aside class="col-sm-7">
<article class="card-body p-5">
	<h3 class="title mb-3">{{$result->name_item }}</h3>

<p class="price-detail-wrap"> 
	<span class="price h3 text-warning"> 
		<span class="num">{{$result->price  }} DH</span>
	</span> 
</p> 

<hr>
<form class=" mt-5" action="cart" method="POST">
	<div class="row">
		<div class="col-sm-5">
			<dl class="param param-inline">
			  <dt>Quantity: </dt>
			  <input type="number" name ="quantite" value="1" min ="1">
			</dl>  
		</div> 
	</div> 
	<hr>
	

	
	@csrf
	<input type="hidden" name ="product_id" value={{$result->id_item  }}>
	<button class="btn btn-lg btn-outline-success text-uppercase mt-5"><i class="fas fa-shopping-cart"></i> Add to cart </button>	
	
	
	</form>
	
</article> 
		</aside> 
	</div> 
</div> 

@stop