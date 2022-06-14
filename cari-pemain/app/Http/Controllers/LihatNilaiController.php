<?php

namespace App\Http\Controllers;

use App\Models\Nilaipemain;
use Illuminate\Http\Request;

class LihatNilaiController extends Controller
{
    public function index()
    {
        $Nilaipemain = Nilaipemain::paginate();
        return view('menu.lihatnilai.index', compact('Nilaipemain'));
    }
}
