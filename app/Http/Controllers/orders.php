<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\order;
use App\Models\cart;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Collection;

class orders extends Controller
{
    function order(Request $req){
       $address= $req->address;
        if ($req->session()->has('id_user')) {
            $id_user = $req->session()->get('id_user');
              $result=Db::table('cart')
              ->where('cart.id_user','=',"$id_user")
              ->get();
              $keylenght =8;
              $str="1234567890";
                $randstr = substr(str_shuffle($str),0,$keylenght);
              foreach ($result as $data) {
                DB::table('orde')
                ->insertGetId(
                    ['id_user'=>$data->id_user,'id_product'=>$data->id_product,'quantite'=>$data->quantite,'address'=>$address,'no_order'=>$randstr,'order_date'=>NOW()]
                );


                Db::table('cart')
              ->where('id_user','=',"$id_user")
              ->delete();


              }

              $result2=Db::table('orde')
              ->join('product','orde.id_product','=','product.id_item')
              ->select('product.*','orde.*',DB::raw('sum(product.price*orde.quantite) AS total_sales'))
              ->where('orde.id_user','=',"$id_user")
              ->groupBy('no_order')
              ->orderby('order_date','desc')
              ->distinct('no_order')
              ->get();                  

                                               
              $result3=Db::table('orde')
              ->join('product','orde.id_product','=','product.id_item')
              ->select('product.*','orde.*')
              ->where('orde.id_user','=',"$id_user")
              ->get();
      
              return  view('order',['result2'=>$result2,'result3'=>$result3])->withTitle('profile')->withAuthor('logout');
    
            }else {
            return  view('login');
            }

    }
}
