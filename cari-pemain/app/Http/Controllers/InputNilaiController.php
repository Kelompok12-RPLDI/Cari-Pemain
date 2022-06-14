<?php

namespace App\Http\Controllers;
use App\Models\Nilaipemain;
use Illuminate\Http\Request;

class InputNilaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nilai_pemain = Nilaipemain::paginate();
        return view('menu.nilaipemain.index', compact('nilai_pemain'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $userOption = Nilaipemain::orderBy('id_pemain')->get();
        return view('menu.nilaipemain.create', compact('userOption'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $r)
    {
        $nilaipemain = Nilaipemain::create([
            'nama_pemain' => $r->nama,
            'posisi_pemain' => $r->posisi,
            'kecepatan' => $r->kecepatan,
            'stamina' => $r->stamina,
            'power' => $r->power,
            'feedback' => $r->feedback,
        ]);

        return redirect()->route('nilaipemain.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $nilaipemain = Nilaipemain::where('id_pemain', $id)->get();
        return view('menu.nilaipemain.edit', compact('nilaipemain'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $r, Nilaipemain $nilai)
    {
        $nilaipemain = Nilaipemain::where('id_pemain', $nilai->id_pemain)->update([
            'nama_pemain' => $r->nama,
            'posisi_pemain' => $r->posisi,
            'kecepatan' => $r->kecepatan,
            'stamina' => $r->stamina,
            'power' => $r->power,
            'feedback' => $r->feedback,
        ]);

        return redirect()->route('nilaipemain.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $nilaipemain = Nilaipemain::where('id_pemain', $id);
        
        $nilaipemain->delete();

        return redirect()->route('nilaipemain.index');
    }
}
