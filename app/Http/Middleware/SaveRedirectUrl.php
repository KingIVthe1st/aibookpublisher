<?php
 
namespace App\Http\Middleware;
 
use Closure;
use Illuminate\Http\Request;
use Session;

class SaveRedirectUrl{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next) {
        
         
        if($request->query('redirect_url'))
          Session::put('redirect_url',request()->url());
         
      return $next($request);
      
    }
}