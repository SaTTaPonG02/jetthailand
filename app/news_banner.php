<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class news_banner extends Model
{
    protected $table='tb_news_banner';
    protected $primaryKey='id';
    protected $fillable = ['id','images','title_en','title_th'];
}
