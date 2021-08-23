@extends('layout')

@section('content')
<table class="table mt-5">
  <thead>
    <tr>
    <th scope="col">#</th>
      <th scope="col">product name</th>
      <th scope="col">quantite</th>
      <th scope="col">price</th>
    </tr>
    
  </thead>
  <tbody>
        @php
          $i = 1;
         
      @endphp
  @foreach($result as $item)
  
    <tr>
      <th scope="col">{{$i++}}</th>
      <td>{{$item->name_item }}</td>
      <td>{{$item->quantite}}</td>
      <td>{{$total=$item->price * $item->quantite}} DH</td>
      
</div>

      <td>
         <a href="removecart.{{$item->id_cart}}" class="btn btn-danger btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></a>
         </td>
    </tr>
    
    
    @endforeach 
    
  </tbody>
</table>
<div class="form-outline mt-5 text-center ">
<form action="order" method="POST">
@csrf
<label class="form-label" for="textAreaExample3">Your address</label>
<textarea type="text" name="address" class="form-control mb-3" placeholder="Message " required  ></textarea>
  <div class="mt-3  ">
            <button class="btn btn-lg btn-success btn-block" type="submit">Order now</button>
        </div>
  </form>
</div>
<div class="d-flex justify-content-center  mt-5">
{{$result->links()}}
 </div>
@stop