@extends('layout')

@section('content')

@foreach($result2  as $item)
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body ">

                
                    <div class="px-4 py-5">
                   
                            <h5 class="text-uppercase text-center alert alert-warning" role="alert">{{$item->statues}}</h5>
                             <h4 class="mt-5 theme-color mb-5">Thanks for your order </h4> <span class="theme-color">Payment Summary for order NO:{{$item->no_order}}</span>
                        <div class="mb-3">
                            <hr class="new1">
                        </div>

                            
                            
                        @foreach($result3  as $data  )
                            
                        @if($item->no_order == $data->no_order) 

                                <div class="d-flex justify-content-between">
                                <span class="font-weight-bold">{{$data->name_item }}(Qty:{{$data->quantite }})</span> <span class="text-muted">{{$data->quantite *$data->price }} DH</span>
                                </div>
                                @endif
                        @endforeach 
                       

                      
                        

                        <div class="d-flex justify-content-between">
                        
                            <small>Shipping</small> <small>{{$item->delivery_tax}} DH</small>
                        </div>
                        
                        
                        
                        <div class="d-flex justify-content-between mt-3">
                            <span class="font-weight-bold">Total</span> <span class="font-weight-bold theme-color">{{$item->total_sales +$item->delivery_tax}} DH</span> 
                        </div>
                        
                    </div>


            </div>
        </div>
        
    </div>

@endforeach 


    
@stop