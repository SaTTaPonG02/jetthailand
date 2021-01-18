<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class promotion extends Model
{
    protected $table='tb_promotion';
    protected $primaryKey='id';
    protected $fillable = ['id','start_date','end_date','images_1','images_2','file_download','title_en','title_th','detail_en','detail_en'];
}
