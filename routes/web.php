<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('frontend.index');
});

Route::get('/kategori/{key}','FrontendController@filter');
Route::get('/shop', 'FrontendController@shop');
Route::get('/product/detail/{products}', 'FrontendController@detail')->name('detail');
Route::get('/cart', 'FrontendController@cart');
Route::get('/loginregist', 'FrontendController@loginregist');
Route::get('/checkout', 'FrontendController@checkout');
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
Auth::routes();



Route::get('/home', 'HomeController@index')->name('home');
Route::group(['prefix'=>'admin', 'middleware'=>['auth', 'role:admin']], function () {
    Route::resource('kategori','KategoriController');
    Route::resource('product','ProductController');
    Route::resource('pengguna','PenggunaController');
    Route::resource('order','OrderController');
    Route::resource('mediapart','MediapartController');



});


Route::group(['middleware'=>'auth'],function(){
    Route::get('/add-cart/{product_id}', function($product_id){
        // $produk = \App\Product::find($product_id);
        $exist = \App\Cart::where('user_id', \Auth::user()->id)->where('product_id',$product_id)->first();
        if($exist){
            $exist->jumlah_brg = $exist->jumlah_brg + 1;
            $exist->save();
        }else{
            $data = new \App\Cart;
            $data->product_id = $product_id;
            $data->jumlah_brg = 1;
            $data->user_id = \Auth::user()->id;
            $data->save();

        }
        return redirect()->back();
    });

    Route::get('cart/{usr_id}', function ($usr_id) {
        $cart = \App\Cart::where('user_id', $usr_id)->get();
        return view('frontend.cart', compact('cart'));
    });

    Route::get('cart/delete/{id}', function ($id) {
        $cart = \App\Cart::find($id)->delete();
        return redirect()->back();
    });

    Route::post('cart/edit/{user_id}', function ( \Illuminate\Http\Request $request, $user_id) {
        for($i = 0; $i < count($request->id); $i++){
            $cart = \App\Cart::find($request->id[$i]);
            // $cart->jumlah_brg = $request->jumlah_brg[$i];
            $cart->save();
        }

        return redirect()->back();
    });

});
