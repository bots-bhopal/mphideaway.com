<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\slider;
use App\category_master;
use App\package_master;
use App\gallery_master;
use Session;
class AdminController extends Controller
{
    //
    public function index()
    {
        return view('mp_admin.index');
    }
    public function header_master()
    {
        $slider = slider::get(); 
        return view('mp_admin.header_master', ['slider'=>$slider]);
    }
    public function category_master()
    {
        $category = category_master::get();
        return view('mp_admin.category_master', ['category'=>$category]);
    }
    public function package_master()
    {
        $package = package_master::get();
        return view('mp_admin.package_master', ['package'=>$package]);
    }
    public function gallery_master()
    {
        $mygallery = gallery_master::get(); 
        return view('mp_admin.gallery_master', ['mygallery'=>$mygallery]);
    }

    // public function header_master()
    // {
    //     $slider = slider::get(); 
    //     return view('mp_admin.header_master', ['slider'=>$slider]);
    // }

    
}
