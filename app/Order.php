<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table='orders';
    protected $fillable=['product_id','penggunas_id'];
    public $timestamps=true;

    public function Product()
	{
		return $this->belongsTo('App\Product','product_id');
    }
    
    public function Penggunas()
	{
		return $this->belongsTo('App\Pengguna','penggunas_id');
	}
}
