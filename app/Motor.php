<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Motor extends Model
{
    protected $table='motor';
    protected $primaryKey='id_motor';
    protected $fillable=['merk_motor','plat_motor','warna_motor','tahun_motor']; 
}
