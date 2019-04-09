<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use DB;
use App\Cart;
class FrontendController extends Controller
{
    public function products()
    {
        $products = Product::all();
        return view('frontend.shop',compact('products'));
    }

    public function shop()
    {
        $table = DB::table('products')->join('kategoris','kategoris.id','=','products.kategori_id')
        ->select('products.*','kategoris.kategori');
        $result = $table->paginate(21);
        $count = $table->count();
        $i ='kategori';
        return view('frontend.shop',compact('result','count','i'));
    }

    public function detail(Product $products)
    {
        return view('frontend.detail',compact('products'));
    }

    public function cart()
    {
        $cart = Cart::with('Product','user')->get();
        return view('frontend.cart', compact('cart'));
    }

    public function checkout()
    {
        return view('frontend.checkout');
    }

    public function loginregist()
    {
        return view('frontend.loginregist');
    }

    public function filter($key)
    {
        $table = DB::table('products')->join('kategoris','kategoris.id','=','products.kategori_id')
        ->select('products.*','kategoris.kategori')
        ->where('kategori',$key);
        $result = $table->paginate(10);
        $count = $table->count();
        $key = $key;
        $i ='kategori';
        return view('frontend.shop', compact('result','count','key','i'));
    }

}
