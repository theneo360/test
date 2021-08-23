<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class userauth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if($request->path()=="login" && $request->session()->has('id_user')){
            return redirect('contact');
        }
        if($request->path()=="signup" && $request->session()->has('id_user'))
        {
            
            return redirect('logout');
        }
        if($request->path()=="verification"){
            
            return redirect('signup');

        }
        if($request->path()=="profile"  && !$request->session()->has('id_user') ){
            
            return redirect('login');

        }
        return $next($request);
    }
}
