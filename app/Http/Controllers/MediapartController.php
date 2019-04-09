<?php

namespace App\Http\Controllers;

use App\Mediapart;
use Illuminate\Http\Request;

class MediapartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mediaparts = Mediapart::all();
        return view('backend.mediapart.index',compact('mediaparts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.mediapart.create');
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
            'foto' => 'required|',
            'nama' => 'required|unique:mediaparts',     
        ]);

        $mediaparts = new Mediapart;
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $filename = str_random(6). '_' . $file->getClientOriginalName();
            $destinationPath = public_path() .DIRECTORY_SEPARATOR. '/assets/admin/images/mediapart/';
            $uploadSucces = $file->move($destinationPath,$filename);
            $mediaparts->foto = $filename;
        }
        $mediaparts->nama = $request->nama;
        $mediaparts->save();
        return redirect()->route('mediapart.index'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Mediapart  $mediapart
     * @return \Illuminate\Http\Response
     */
    public function show(Mediapart $mediapart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Mediapart  $mediapart
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mediaparts = Mediapart::findOrFail($id);
        return view('backend.mediapart.edit',compact('mediaparts'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Mediapart  $mediapart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'foto' => 'required|',
            'nama' => 'required|',
        ]);
        $mediaparts = Mediapart::findOrFail($id);
        //edit picture
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $filename = str_random(6). '_' . $file->getClientOriginalName();
            $destinationPath = public_path() .DIRECTORY_SEPARATOR. '/assets/admin/images/mediapart/';
            $uploadSucces = $file->move($destinationPath,$filename);

        $mediaparts->picture =$filename;
        }    
        $mediaparts->nama = $request->nama;
        $mediaparts->save();
        return redirect()->route('mediapart.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mediapart  $mediapart
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mediaparts = Mediapart::findOrFail($id);
        $mediaparts->delete();
        return redirect()->route('mediapart.index');
    }
}
