<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\cart;

class cartes extends Controller
{
    
    function cart(Request $req){
        $id_user = $req->session()->get('id_user');
        $product_id = $req->product_id;
        $quantite=$req->quantite;
        if ($req->session()->has('id_user')) {
        $result = DB::table('cart')
        ->insertGetId(
            ['id_user'=>$id_user,'id_product'=>$product_id,'quantite'=>$quantite]
        );
        if (!$result==false ) {
            return redirect('cartes')->with('status', 'carte updated!'); 
        }
        }
        else{
            return view('login');
        }

    }

    function cartes(Request $req){
        if ($req->session()->has('id_user')) {
        $id_user = $req->session()->get('id_user');
          $result=Db::table('cart')
          ->join('product','cart.id_product','=','product.id_item')
          ->where('cart.id_user','=',"$id_user")
          ->select('product.*','cart.*')
          ->paginate(15);
           return  view('cartes',['result'=>$result])->withTitle('profile')->withAuthor('logout');

        }else {
        return  view('login');
        }
   }
   


    function removecart($cart_id){
            cart::destroy($cart_id);
    return  redirect('cartes');
    
}
    
}
