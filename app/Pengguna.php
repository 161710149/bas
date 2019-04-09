<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
    protected $table='penggunas';
    protected $fillable=['nama','alamat','email','kodepos','kontak'];
    public $timestamps=true;
}
