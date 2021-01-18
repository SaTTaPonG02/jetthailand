<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $table='tb_product';
    protected $primaryKey='id';
    protected $fillable = ['id','images','title_en','title_th','detail_en','detail_en'];
}
