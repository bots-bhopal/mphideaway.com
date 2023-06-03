<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\package_master;
use App\category_master;
use App\gallery_master;

use App\loginModel;

class LoginController extends Controller
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
    return view('login');
 }


public function login(Request $req)
{
    $login = loginModel::get(); 
    
    foreach ($login as $login) {
        
      }
    
    if($login->username == $req->username && $login->password == $req->password)
    {
        $req->session()->put('logdata', [$req->input()]);
        return Redirect('admin');        
    }
    else
    {
      
        return view('login');
        
    }
 
}


public function logout()
{
    \Session::forget('logdata');
    return Redirect('login'); 
}





}
