<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SessionController extends Controller
{
    public function index(Request $request){
        // ada 3 cara untuk membuat Session
        // cara 1 menggunakan function helper session
        session(['role' => 'admin']);

        // cara 2 menggunakan request session
        $request->session()->put('role', 'admin');
        
        // cara 3 
        Session::put('role', 'admin');
    }

    public function bacasession($request){
        // cara 1
        session(['role']);

        // cara 2
        $request->session()->get('role');

        // cara 3
        Session::get('role');
    }

}
