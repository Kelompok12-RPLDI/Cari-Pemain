<?php

namespace App\Http\Controllers;
use App\Models\Jadwalpemain;
use Illuminate\Http\Request;

class InputJadwalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $jadwal_pemain = Jadwalpemain::paginate();
        return view('menu.jadwalpemain.index', compact('jadwal_pemain'));

        

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('menu.jadwalpemain.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $r)
    {
        $jadwalpemain = Jadwalpemain::create([
            'tempat' => $r->tempat,
            'tanggal' => $r->tanggal,
            'kegiatan' => $r->kegiatan,

            
        ]);

        return redirect()->route('jadwalpemain.index');
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
        $jadwalpemain = Jadwalpemain::find($id);
        return view('menu.jadwalpemain.edit', compact('jadwalpemain'));

        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $r, $id)
    {
        $jadwalpemain = Jadwalpemain::where('id', $id)->update([
            'tempat' => $r->tempat,
            'tanggal' => $r->tanggal,
            'kegiatan' => $r->kegiatan,
        ]);

        return redirect()->route('jadwalpemain.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jadwalpemain = Jadwalpemain::find($id);

        $jadwalpemain->delete();

        return redirect()->route('jadwalpemain.index');
    }
}
