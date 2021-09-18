<?php

namespace sisVentas\Http\Controllers;

use Illuminate\Http\Request;

use sisVentas\Http\Requests;

class AuthController extends Controller
{
    //

    public function login(){
        return view('auth.login');
    }
}
