<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table='products';
    protected $fillable=['foto','nama','harga','detail','stok','kategori_id'];
    public $timestamps=true;

    public function Kategori()
	{
		return $this->belongsTo('App\Kategori','kategori_id');
	}
}
