<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class news extends Model
{
    protected $table='tb_news';
    protected $primaryKey='id';
    protected $fillable = ['id','datetime','images_1','images_2','file_download','title_en','title_th','detail_en','detail_en'];
}
