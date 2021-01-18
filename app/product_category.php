<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product_category extends Model
{
    protected $table='tb_product_category';
    protected $primaryKey='id';
    protected $fillable = ['id','title_en','title_th'];
}
