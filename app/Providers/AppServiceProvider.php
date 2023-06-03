<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\slider;
use App\package_master;
use App\category_master;
use App\gallery_master;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        $slider = slider::get(); 
        return view('mp_admin.header_master', ['slider'=>$slider]);

        $package_name = category_master::where('cat_type', 'package')->get(); 
        View::share('package_name', $package_name);

     $package_name1 = category_master::where('cat_type', 'Wildlife & Nature')->get(); 
     View::share('package_name1', $package_name1);

     $package_name2 = category_master::where('cat_type', 'Haritage & Pilgrimage')->get(); 
     View::share('package_name2', $package_name2);

     $package_name3 = category_master::where('cat_type', 'Jal Mahoutsav')->get(); 
     View::share('package_name3', $package_name3);
    }
}
