<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\slider;
use App\package_master;
use App\category_master;
use App\gallery_master;
// use App\topmodel;
use Illuminate\Support\Facades\View;
class WelcomeController extends Controller
{

    public function __construct()
    {
    
        $package_name = category_master::where('cat_type', 'package')->get(); 
           View::share('package_name', $package_name);

        $package_name1 = category_master::where('cat_type', 'Wildlife & Nature')->get(); 
        View::share('package_name1', $package_name1);

        $package_name2 = category_master::where('cat_type', 'Haritage & Pilgrimage')->get(); 
        View::share('package_name2', $package_name2);

        $package_name3 = category_master::where('cat_type', 'Jal Mahoutsav')->get(); 
        View::share('package_name3', $package_name3);
       
    }



    //
    public function index()
    {
    $slider = slider::where('show_hide', 'on')->take(5)->get(); 
    $package = package_master::where('package_show_hide', 'on')->take(6)->get(); 
    $package_slide = package_master::where('package_show_hide', 'on')->get();
    $gallery_data = gallery_master::where('show_hide', 'on')->take(9)->get(); 
       return view('welcome', ['slider'=>$slider, 'package'=> $package, 'package_slide'=> $package_slide, 'gallery_data'=> $gallery_data]);
    }








}
