<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\information;
use Illuminate\Support\Facades\DB;
class contact extends Controller
{
    function contact(Request $req)
    {
        $email = $req->email;
        $name=$req->name;
        $subject=$req->subject;
        $message =$req->message;

        $validator = validator::make($req->all(),[
            'email'=>'required',
            'name'=>'required',
            'subject'=>'required',
            'message'=>'required|min:8',
                

        ]);
        if($validator->stopOnFirstFailure()->fails()){
            return redirect('contact')
            ->withErrors($validator)
            ->withInput();
        }
        
        $result = DB::table('information')
        ->insertGetId(
            ['email'=>$email,'name'=>$name,'subject'=>$subject,'message'=>$message]
        );
        if ($result ) {
        return  view('contact');
        }else{

        return redirect ('/');

        }
    }
}
