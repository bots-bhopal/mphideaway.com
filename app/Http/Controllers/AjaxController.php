<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\category_master;
use App\Http\Controllers\Controller;

class AjaxController extends Controller {

   public function index(Request $req) {
   
   $category_master = category_master::where('cat_type', $req->value)->get(); 
      foreach($category_master as  $category_master)
      {
        echo  "<option value='$category_master->cat_name'>$category_master->cat_name</option>";
         
       }   
   }
}