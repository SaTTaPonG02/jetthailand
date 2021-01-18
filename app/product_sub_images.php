<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product_sub_images extends Model
{
    protected $table='tb_product_sub_images';
    protected $primaryKey='id';
    protected $fillable = ['id','images'];
}
