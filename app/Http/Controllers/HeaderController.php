<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\header_master;
use App\category_master;
use App\package_master;
use DB;
class HeaderController extends Controller
{
    //

    public function save(Request $req)
    {
        $header_master = new header_master;

        $header_master->title_first = $req->header_title1;
        $header_master->title_second = $req->header_title2;
        $header_img = $req->file('header_img');
        $myimg=rand().'.'.$header_img->getClientOriginalExtension();
        $header_img->move(public_path('slider'),$myimg);
        $header_master->header_img = $myimg;
        // $header_master->header_img = $req->file('header_img')->store('public');
        $header_master->show_hide = $req->header_check;
        $header_master->save();
        // $request->session()->flash('status', 'Task was successful!');
        return Redirect('header_master');        
    }

    public function del(Request $req)
{

    $header_master = header_master::find($req->id);
    $header_master->delete();
    return Redirect('header_master');
}

public function edit(Request $req)
{
    $header_master = header_master::find($req->id);    
    $id = $req->id;

    $header_edit = header_master::where('id', $id)->get(); 
   return view('mp_admin.header_edit', ['header_edit'=>$header_edit]);
}


public function update(Request $req)
{

    $header_update = header_master::find($req->header_id);
    
        $header_update->title_first = $req->header_title1;
        $header_update->title_second = $req->header_title2;

        if ($req->hasFile('header_img')) {
            $header_img = $req->file('header_img');
            $myimg=rand().'.'.$header_img->getClientOriginalExtension();
            $header_img->move(public_path('slider'),$myimg);
            $header_update->header_img = $myimg;
        }     
     
        $header_update->show_hide = $req->header_check;
        $header_update->save(); 
        return Redirect('header_master');
}

public function savecat(Request $req)
{
    $category_master = new category_master;

    $category_master->cat_type = $req->cat_type;
    $category_master->cat_name = $req->cat_name;
    $category_master->show_hide = $req->cat_check;
    $category_master->save();
    // $request->session()->flash('status', 'Task was successful!');
    return Redirect('category_master');        
}

public function delcat(Request $req)
{

    $category_master = category_master::find($req->id);
    $category_master->delete();
    return Redirect('category_master');
}


public function editcat(Request $req)
{
    $category_master = category_master::find($req->id);    
    $id = $req->id;

    $category_edit = category_master::where('id', $id)->get(); 
   return view('mp_admin.category_edit', ['category_edit'=>$category_edit]);
}


public function updatecat(Request $req)
{

    $category_update = category_master::find($req->header_id);
    
        $category_update->cat_type = $req->cat_type;
        $category_update->cat_name = $req->cat_name;
        $category_update->show_hide = $req->cat_check;
        $category_update->save(); 
        return Redirect('category_master');
}








public function savepackage(Request $req)
{
    $package_master = new package_master;

    $package_master->package_type = $req->package_type;
    $package_master->package_category = $req->package_category;
    $package_master->package_title = $req->PackageTitle;
    $package_master->package_amount = $req->PackageAmount;
    $package_img = $req->file('PackageImage');
        $mypackageimg=rand().'.'.$package_img->getClientOriginalExtension();
        $package_img->move(public_path('package'),$mypackageimg);
        $package_master->package_image = $mypackageimg;
    // $package_master->package_image = $req->PackageImage;
    $package_master->package_show_hide = $req->package_show_hide;
    $package_master->package_highlight = $req->Highlight;
    $package_master->example_textarea = $req->overview;
    $package_master->sub_category = $req->SubCategory;
    $package_master->flights = $req->Flights;
    $package_master->hotels = $req->Hotels;
    $package_master->sight_seen = $req->Sight_seen;
    $package_master->transfers = $req->Transfers;
    $package_master->meals = $req->Meals;
    $package_master->bike_tour = $req->BikeTour;
    $package_master->cruise_tour = $req->CruiseTour;
    $package_master->water_spots = $req->WaterSpots;
    $package_master->adventure_sports = $req->AdventureSports;
    $package_master->camp_stays = $req->CampStays;
    $package_master->trekking = $req->Trekking;
    $package_master->om = $req->Om;
    $package_master->gurudwara = $req->Gurudwara;
    $package_master->church = $req->Church;
    
    $package_master->save();
    // $request->session()->flash('status', 'Task was successful!');
    return Redirect('package_master');        
}

public function delpackage(Request $req)
{

    $package_master = package_master::find($req->id);
    $package_master->delete();
    return Redirect('package_master');
}



public function editpackage(Request $req)
{
    $package_master = package_master::find($req->id);    
    $id = $req->id;

    $package_edit = package_master::where('id', $id)->get(); 
   return view('mp_admin.package_edit', ['package_edit'=>$package_edit]);
}


public function updatepackage(Request $req)
{

    $package_update = package_master::find($req->id);
   
        $package_update->package_type = $req->package_type;
        $package_update->package_category = $req->package_category;
        $package_update->package_title = $req->PackageTitle;
        $package_update->package_amount = $req->PackageAmount;

        if ($req->hasFile('PackageImage')) {
            $package_img = $req->file('PackageImage');
            $mypackageimg=rand().'.'.$package_img->getClientOriginalExtension();
            $package_img->move(public_path('package'),$mypackageimg);
            $package_update->package_image = $mypackageimg;
        }  
        
        $package_update->package_show_hide = $req->package_show_hide;
        $package_update->package_highlight = $req->Highlight;
        $package_update->example_textarea = $req->overview;
        $package_update->sub_category = $req->SubCategory;
        $package_update->flights = $req->Flights;
        $package_update->hotels = $req->Hotels;
        $package_update->sight_seen = $req->Sight_seen;
        $package_update->transfers = $req->Transfers;
        $package_update->meals = $req->Meals;
        $package_update->bike_tour = $req->BikeTour;
        $package_update->cruise_tour = $req->CruiseTour;
        $package_update->water_spots = $req->WaterSpots;
        $package_update->adventure_sports = $req->AdventureSports;
        $package_update->camp_stays = $req->CampStays;
        $package_update->trekking = $req->Trekking;
        $package_update->om = $req->Om;
        $package_update->gurudwara = $req->Gurudwara;
        $package_update->church = $req->Church;
        
        $package_update->save(); 
        return Redirect('package_master');
}











}
