<?php

namespace App\Http\Controllers;

use App\Pengguna;
use Illuminate\Http\Request;

class PenggunaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $penggunas = Pengguna::all();
        return view('backend.pengguna.index',compact('penggunas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pengguna.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'nama' => 'required|',
            'alamat' => 'required|',
            'email' => 'required|',
            'kodepos' => 'required|',
            'kontak' => 'required|',
            ]);
        $penggunas = new Pengguna;
        $penggunas->nama = $request->nama;
        $penggunas->alamat = $request->alamat;
        $penggunas->email = $request->email;
        $penggunas->kodepos = $request->kodepos;
        $penggunas->kontak = $request->kontak;

        $penggunas->save();
        return redirect()->route('pengguna.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pengguna  $pengguna
     * @return \Illuminate\Http\Response
     */
    public function show(Pengguna $pengguna)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pengguna  $pengguna
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $penggunas = Pengguna::findOrFail($id);
        return view('backend.pengguna.edit',compact('penggunas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pengguna  $pengguna
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $this->validate($request,[
            'nama' => 'required|',
            'alamat' => 'required|',
            'email' => 'required|',
            'kodepos' => 'required|',
            'kontak' => 'required|',
            ]);
        $penggunas = Pengguna::findOrFail($id);
        $penggunas->nama = $request->nama;
        $penggunas->alamat = $request->alamat;
        $penggunas->email = $request->email;
        $penggunas->kodepos = $request->kodepos;
        $penggunas->kontak = $request->kontak;
        $penggunas->save();
        return redirect()->route('pengguna.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pengguna  $pengguna
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pengguna $pengguna)
    {
        //
    }
}
