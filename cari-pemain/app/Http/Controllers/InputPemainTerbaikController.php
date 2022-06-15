<?php

namespace App\Http\Controllers;
use App\Models\Pemainterbaik;
use Illuminate\Http\Request;

class InputPemainTerbaikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pemainterbaik = Pemainterbaik::paginate();
        return view('menu.pemainterbaik.index', compact('pemainterbaik'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('menu.pemainterbaik.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $r)
    {
        $pemainterbaik = Pemainterbaik::create([
            'id' => $r->id,
            'nama_pemain' => $r->nama,
            'posisi_pemain' => $r->posisi,

            
        ]);

        return redirect()->route('pemainterbaik.index');
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
        $pemainterbaik = Pemainterbaik::find($id);
        return view('menu.pemainterbaik.edit', compact('pemainterbaik'));
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
        $pemainterbaik = JadPemainterbaik::where('id', $id)->update([
            'id' => $r->id,
            'nama_pemain' => $r->nama,
            'posisi_pemain' => $r->posisi,
        ]);

        return redirect()->route('pemainterbaik.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pemainterbaik = Pemainterbaik::find($id);

        $pemainterbaik->delete();

        return redirect()->route('pemainterbaik.index');
    }
}
