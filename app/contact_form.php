<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class contact_form extends Model
{
    protected $table='tb_contact_form';
    protected $primaryKey='id';
    protected $fillable = ['id','name','tel','email','message'];
}
