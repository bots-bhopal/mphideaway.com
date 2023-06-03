<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

use App\slider;
use App\package_master;
use App\category_master;
use App\gallery_master;
class DomesticController extends Controller
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
    public function index($id)
    {
      
        $category_master = category_master::where('id', $id)->get(); 

        foreach($category_master as  $category_master)
        {
          $cat_name = $category_master->cat_name;           
         }
         
        $package = package_master::where('package_category', $cat_name)->get(); 

        return view('packages', ['package'=>$package]);

    }

    public function packages_detail(Request $req)
    {
      
            $id = $req->id;
         
            $package = package_master::where('id', $id)->get(); 
            return view('packages_detail', ['package'=>$package]);

    }











  
}
