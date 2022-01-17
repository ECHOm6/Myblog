<?php

namespace App\Http\Middleware\home;

use Closure;
use Session;
class isLogin
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
        if(Session::has('name')){
        return $next($request);
        }else{
            return redirect('home/index')->with("<script>alert('no');</script>");
        }
    }
}
