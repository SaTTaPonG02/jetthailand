<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product_sub extends Model
{
    protected $table='tb_product_sub';
    protected $primaryKey='id';
    protected $fillable = ['id','title_en','title_th'];
}
