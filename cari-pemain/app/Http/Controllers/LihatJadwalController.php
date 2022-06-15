<?php

namespace App\Http\Controllers;
use App\Models\Jadwalpemain;
use Illuminate\Http\Request;

class LihatJadwalController extends Controller
{
    public function index()
    {
        $Jadwalpemain = Jadwalpemain::paginate();
        return view('menu.lihatjadwal.index', compact('Jadwalpemain'));
    }
}
