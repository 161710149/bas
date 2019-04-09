<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mediapart extends Model
{
    protected $table='mediaparts';
    protected $fillable=['foto','nama'];
    public $timestamps=true;

}
