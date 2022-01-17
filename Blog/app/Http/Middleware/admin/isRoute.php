<?php

namespace App\Http\Middleware\admin;

use Closure;
use Session;
class isRoute
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $routes=\Route::current()->getActionName();
        $arr=Session::get('array');
        // dd($arr);
        if($arr[0]=='ALL'){
            return $next($request);
        }
        else{
            if(in_array($routes,Session::get('array'))){
                return $next($request);
            }else{
                return redirect('/');
            }
        }
    }
}
