<?php

namespace App\Http\Middleware;

use Illuminate\Support\Facades\Auth;

use Closure;

class LoginUserCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $role)
    {
     

       
        $user = Auth::user();
        
        if ($role === "manager"){

            if (!$user->is_manager){
                return redirect(route('users.index'));
            }
            return $next($request); 
        }

        if($role === "user"){
            
            if ($user->is_manager){
                return redirect(route('manager.index'));
            }
            return $next($request);
        }

        
    }

}