<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Nilaipemain;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $total_users = User::all()->count();
        $nilai_pemain = Nilaipemain::paginate();

        return view('home', compact('total_users', 'nilai_pemain'));
    }
}
