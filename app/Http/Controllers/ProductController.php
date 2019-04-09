<?php

namespace App\Http\Controllers;

use App\Product;
use App\Kategori;
use File;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $products = Product::with('Kategori')->get();
        $kategori = Kategori::all();
        return view('backend.product.index',compact('products', 'kategori'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori = Kategori::all();
        return view('backend.product.create', compact('kategori'));
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
            'nama' => 'required|unique:products',
            'harga' => 'required|',
            'detail' => 'required|',
            'stok' => 'required|',
            'kategori_id' => 'required'
        ]);
        $products = new Product;
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $filename = str_random(6). '_' . $file->getClientOriginalName();
            $destinationPath = public_path() .DIRECTORY_SEPARATOR. '/assets/admin/images/product/';
            $uploadSucces = $file->move($destinationPath,$filename);
            $products->foto = $filename;
        }
        $products->nama = $request->nama;
        $products->harga = $request->harga;
        $products->detail = $request->detail;
        $products->stok = $request->stok;
        $products->kategori_id = $request->kategori_id;
        $products->save();
        return redirect()->route('product.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $products = Product::findOrFail($id);
        $kategori = Kategori::all();
        $selectedkategori = Product::findOrFail($id)->kategori_id;
        return view('backend.product.edit',compact('products','kategori','selectedkategori'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'foto' => 'required|',
            'nama' => 'required|unique:products',
            'harga' => 'required|',
            'detail' => 'required|',
            'stok' => 'required|',
            'kategori_id' => 'required'
        ]);
        $products = Product::findOrFail($id);
        //edit picture
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $filename = str_random(6). '_' . $file->getClientOriginalName();
            $destinationPath = public_path() .DIRECTORY_SEPARATOR. '/assets/admin/images/product/';
            $uploadSucces = $file->move($destinationPath,$filename);

        $products->picture =$filename;
        }
        $products->nama = $request->nama;
        $products->harga = $request->harga;
        $products->detail = $request->detail;
        $products->stok = $request->stok;
        $products->kategori_id = $request->kategori_id;
        $products->save();
        return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        $products = Product::findOrFail($id);
        $products->delete();
        return redirect()->route('product.index');
    }
}
