<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $table = 'carts';
    protected $fillable = ['jumlah_brg', 'product_id', 'user_id'];
    public $timestamps = true;

    public function Product()
    {
    	return $this->belongsTo('App\Product','product_id');
    }

    public function user()
    {
        return $this->belongsTo('App\User','user_id');
    }
}
