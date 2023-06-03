<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class header_master extends Model
{
    //
    protected $table ='header_master';
    public $timestamps = false;
    protected $fillable = ['title_first', 'title_second' , 'header_img'];
}
