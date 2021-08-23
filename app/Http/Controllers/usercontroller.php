<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\useres;
use App\Models\verification;
use App\Mail\pwd;
use App\Mail\verifications;
use App\Models\pwdreset;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use Redirect;

use Session;
use Auth;
class usercontroller extends Controller
{
    function login(Request $req){
        $email = $req->email;
        $pwd = $req->password;
        
        // $validator = Validator::make($req->all(),[
        //     'email'=>'required ',
        //     'password'=>'required',
            

        // ]);
        // if($validator->StopOnFirstFailure()->fails()){
        //     return redirect('login')
        //     ->withErrors($validator)
        //     ->withInput();
        // }
        $result= useres::where('phone', '=', "$email") 
        ->orWhere('email', '=', "$email")
        ->get();
        $count = $result->count();
        $res=verification::where('email','=',"$email")
        ->get();
        if ($count >0 ) {
            $password= $result[0]->{'pwd'};
            $checkpwd =hash::check($pwd,$password);
            // if ($res === true) {
            //     return view('login')->with('titl','wrong email or password');
            // }
            if($checkpwd === false ){
                
                return view('login')->with('titl','wrong email or password');
            
            }else if ($checkpwd === true && $res === false ){
                $req ->session()->put('id_user',$result[0]->{'id_user'});
               
                return view('about')->withTitle('profile')->withAuthor('logout');
                    
            }else {
                return view('login')->with('titl',' Check your Email to verify your account');
                
            }
            
            }else{
                

                return view('login')->with('titl','wrong email or password');
               
              
            }
         
    }

    function register(Request $req)
        {
        $email = $req->email;
        $pwd = $req->password;
        $phone=$req->phone;
        $name=$req->name;
        $lastname=$req->lastname;
        $Repassword =$req->Repassword;

   
       
     

            $result= useres::where('email', '=', "$email") 
                ->orWhere('phone', '=', "$phone")
                ->get();
        

        if ($pwd==$Repassword && $result->isEmpty()) {
        $hashpwd= hash::make($pwd);
        $result1 = DB::table('useres')
        ->insertGetId(
            ['firstname'=>$name,'lastname'=>$lastname,'phone'=>$phone,'email'=>$email,'pwd'=>$hashpwd,'registrationdate'=>NOW()]
        );
        $token = Str::random(64);
        DB::table('verification')->insert(
        ['email' => $email, 'token' => $token, 'created_at' =>NOW()]);
        Mail::to($email)->send(new verifications($token));
        if ($result1 == true) {
        return  view('login')->with('titlo','Check you email to verify your account');

        }else{

        return redirect ('/');

        }

        }else{
            return view ('signup')->with('titl','you enter a phone or email that has been used or rewrite ur password');
        }
         
        
        
    }

   

    function logout(Request $request) {
        Session::flush();
        Session::forget('id_user');
        Auth::logout();
        return view('/login');
    }

    

    
     
    function user( Request $req){
        $id_user = $req->session()->get('id_user');
        if ($req->session()->has('id_user')) {
            $result = useres::where('id_user', '=', "$id_user") 
        ->get();
            return view('profile',['result'=>$result])->withTitle('profile')->withAuthor('logout');

         }
        
    }

    public function forgot(Request $req){
        $email = $req->email;
        $result= pwdreset::where('email', '=', "$email") 
        ->get();
        $result1= useres::where('email', '=', "$email") 
        ->get();
        if ($result->isEmpty()&&!$result1->isEmpty() ) {
            $token = Str::random(64);
            DB::table('pwdreset')->insert(
            ['email' => $email, 'token' => $token, 'created_at' =>NOW()]);
            Mail::to($email)->send(new pwd( $token ));
            return view('forgotpwd')->with('titl','email has been sent ');
        }
        else if (!$result->isEmpty()) {
            return view('forgotpwd')->with('titles','Check your Email');
        } else{
            return view('forgotpwd')->with('titles','sorry you do not exist in our systeme ');
        }
       
    }
    

    

    function changepwd(Request $req,$token){
        $pwd = $req->pwd;
        $repwd= $req->repwd;
        $hashpwd= hash::make($pwd);
        $result= pwdreset::where('token', '=', "$token") 
        ->get();
        if ($pwd==$repwd && !$result->isEmpty()){
        $result1 = DB::table('pwdreset')
        ->where('token', '=', "$token")
        ->get();
        $result2 = DB::table('useres')
        ->where('email', '=', $result1[0]->email)
        ->update(['pwd' =>  $hashpwd]);
        DB::table('pwdreset')->where('token', '=', "$token")->delete();
        return view ("login")->with('titls','password has been changed'); 
        }else {
            return view ("changepwd")->with('titl','password does not match'); 
        }
    }

}
