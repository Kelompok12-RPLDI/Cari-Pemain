<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controllerRegister extends Controller
{
    public function index()
    {
        return view('register/register', [
            'title' => 'Register',
            'register'
        ]);
    }
}