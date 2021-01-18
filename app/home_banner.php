<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class home_banner extends Model
{
    protected $table='tb_home_banner';
    protected $primaryKey='id';
    protected $fillable = ['id','images_pc','images_mb','title_en','title_th','detail_en','detail_th','link'];
}
