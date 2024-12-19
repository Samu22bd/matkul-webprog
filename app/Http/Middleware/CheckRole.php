<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $role): Response
    {
        // pastikan bahwa pengguna sudah login
        if(!Auth::check()){
            return redirect('/login');
        }
        //periksa apakah pengguna sudah sesuai role
        $user = Auth::user();
        if($user->role != $role){
            if($user->role == 'admin'){
                return redirect('/home');
            }else if($user->role == 'user'){
                return redirect('/');
            }
        }

        return $next($request);
    }
}