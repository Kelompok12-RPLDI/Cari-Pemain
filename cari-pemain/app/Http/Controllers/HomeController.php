<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Nilaipemain;
use App\Models\Pemainterbaik;
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
        $total_users_admin = User::where('role', 'admin')->count();
        $total_users_pemain = User::where('role', 'user')->count();
        $nilai_pemain = Nilaipemain::paginate();
        $pemainterbaik = Pemainterbaik::paginate();

        return view('home', compact('total_users_admin','total_users_pemain', 'nilai_pemain', 'pemainterbaik'));
    }
}
