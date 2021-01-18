<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product_images extends Model
{
    protected $table='tb_product_images';
    protected $primaryKey='id';
    protected $fillable = ['id','images'];
}
