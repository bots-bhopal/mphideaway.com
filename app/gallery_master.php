<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class gallery_master extends Model
{
    //
    protected $table ='gallery_master';
    public $timestamps = false;
    protected $fillable = ['title_first', 'title_second' , 'gallery_img'];
}
