<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product_sub_detail extends Model
{
    protected $table='tb_product_sub_detail';
    protected $primaryKey='id';
    protected $fillable = ['id','title_en','title_th','detail_en','detail_th'];
}
