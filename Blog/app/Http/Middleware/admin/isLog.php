<?php

namespace App\Http\Middleware\admin;

use Closure;
use http\Env\Request;
use Session;
class isLog
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle( $request, Closure $next)
    {

        if(Session::has('admin')=='Y') {
            return $next($request);
        }else{
            return redirect('admin/login')->withErrors('验证未通过，你无法登录后台');

        }

}
}
