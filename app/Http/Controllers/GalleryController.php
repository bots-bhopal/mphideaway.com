<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\gallery_master;
class GalleryController extends Controller
{
    //

    public function save(Request $req)
    {
        $gallery_master = new gallery_master;

        $gallery_master->title_first = $req->gallery_title1;
        $gallery_master->title_second = $req->gallery_title2;
        $gallery_img = $req->file('gallery_img');
        $myimg=rand().'.'.$gallery_img->getClientOriginalExtension();
        $gallery_img->move(public_path('gallery'),$myimg);
        $gallery_master->gallery_img = $myimg;
        // $gallery_master->header_img = $req->file('header_img')->store('public');
        $gallery_master->show_hide = $req->gallery_check;
        $gallery_master->save();
        // $request->session()->flash('status', 'Task was successful!');
        return Redirect('gallery_master');        
    }

    public function del(Request $req)
{

    $gallery_master = gallery_master::find($req->id);
    $gallery_master->delete();
    return Redirect('gallery_master');
}

public function edit(Request $req)
{
    $gallery_master = gallery_master::find($req->id);    
    $id = $req->id;

    $gallery_edit = gallery_master::where('id', $id)->get(); 
   return view('mp_admin.gallery_edit', ['gallery_edit'=>$gallery_edit]);
}

public function update(Request $req)
{
    $gallery_update = gallery_master::find($req->gallery_id);

        $gallery_update->title_first = $req->gallery_title1;
        $gallery_update->title_second = $req->gallery_title2;

        if ($req->hasFile('gallery_img')) {
            $gallery_img = $req->file('gallery_img');
            $myimg=rand().'.'.$gallery_img->getClientOriginalExtension();
            $gallery_img->move(public_path('gallery'),$myimg);
            $gallery_update->gallery_img = $myimg;
        }     
     
        $gallery_update->show_hide = $req->gallery_check;
        $gallery_update->save(); 
        return Redirect('gallery_master');
}

















}
