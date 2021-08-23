<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\product;

class snack extends Controller
{
    public function index(Request $req){
        $result = product::select('categorie_item')
        ->distinct('categorie_item')
        ->paginate(10);
        $rand1=random_int(1,3);
        $rand2=random_int(1,3);
        $rand3=random_int(1,3);
            
        if ($req->session()->has('id_user')) {
            

            return view('home',['result'=>$result,'rand1'=>$rand1,'rand2'=>$rand2,'rand3'=>$rand3])->withTitle('profile')->withAuthor('logout');

         }else {
             
          

         return  view('home',['result'=>$result,'rand1'=>$rand1,'rand2'=>$rand2,'rand3'=>$rand3]);
         }
    }
    public function login(Request $req){
         if ($req->session()->has('id_user')) {
           
            return  view('login')->withTitle('profile')->withAuthor('logout');

         }else {
         return  view('login');
         }
    }
    function order(Request $req){

        if ($req->session()->has('id_user')) {
            

            return view('order')->withTitle('profile')->withAuthor('logout');

         }else {
             
          

         return  view('login');
         }
    }

    public function signup(Request $req){
        if ($req->session()->has('id_user')) {
            return  view('signup')->withTitle('profile')->withAuthor('logout');

         }else {
         return  view('signup');
         }
         
    }

    public function contact(Request $req){
        if ($req->session()->has('id_user')) {
            return  view('contact')->withTitle('profile')->withAuthor('logout');

         }else {
         return  view('contact');
         }
       
      
   }

    public function logout(Request $req){
        if ($req->session()->has('id_user')) {
            return  view('lougout')->withTitle('profile')->withAuthor('logout');

        }else {
        return  view('login');
        }
    }

    public function about(Request $req){
        if ($req->session()->has('id_user')) {
            return  view('about')->withTitle('profile')->withAuthor('logout');

        }else {
        return  view('about');
        }
    }

    public function verification($token){
        DB::table('verification')->where('token', '=', "$token")->delete();
            return  view('verification');
    
         
        }

        public function profile(Request $req){
            if ($req->session()->has('id_user')) {
                return  view('profile')->withTitle('profile')->withAuthor('logout');
        
             }else {
             return  view('profile');
             }
    }

    public function list( Request $req){
        $result = product::orderBy('categorie_item', 'desc')
        ->paginate(15);
        
        if ($req->session()->has('id_user')) {
            return view('list',['result'=>$result])->withTitle('profile')->withAuthor('logout');

         }else {
            return view('list',['result'=>$result]);
         }
        
    }

    public function detail(Request $req, $name){
        $result = product::all()
        ->where('name_item','=',"$name")
        ->first();
        if ($req->session()->has('id_user')) {
            return view('detail',['result'=>$result])->withTitle('profile')->withAuthor('logout');

         }else {
            return view('detail',['result'=>$result]);
         }
        
    }

    public function categorie(Request $req, $name){
        $result = product::orderBy('categorie_item', 'desc')
        ->where('categorie_item','=',"$name")
        ->paginate(15);
        if ($req->session()->has('id_user')) {
            return view('categorie',['result'=>$result])->withTitle('profile')->withAuthor('logout');

         }else {
            return view('categorie',['result'=>$result]);
         }
        
    }

    public function index1(Request $req){
        if ($req->session()->has('id_user')) {
            return  view('search')->withTitle('profile')->withAuthor('logout');

         }else {
         return  view('search');
         }
    }
        
    function search(Request $req){
        $name = $req->search;
       
        $result=  product::where('name_item', 'LIKE', "%{$name}%") 
          ->orWhere('categorie_item', 'LIKE', "%{$name}%")
          ->orWhere('item_keywords', 'LIKE', "%{$name}%")
          ->orWhere('price', 'LIKE', "%{$name}%")
          ->paginate(10);
   
          if ($req->session()->has('id_user')) {
            if ($req->ajax()) {
                return response()->json($result);
            }
            return view('search',['result'=>$result])->withTitle('profile')->withAuthor('logout');

         }else {
            if ($req->ajax()) {
                return response()->json($result);
            }
            
            return view('search',['result'=>$result]);
         }
   
    }

    function forgot(Request $req){
        
        return view('forgotpwd');
    }
    
    
    function changepwd(Request $req){
        
        return view('changepwd');
    }
}
