<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', 'WelcomeController@index');
Route::get('about', 'AboutController@index');
Route::any('packages/{id?}', 'DomesticController@index');
Route::any('packages_detail', 'DomesticController@packages_detail');
Route::get('national', 'NationalController@index');
Route::get('seasonal', 'SeasonalController@index');
Route::get('contact', 'ContactController@index');

Route::post('getmsg','AjaxController@index');

Route::get('logout', 'LoginController@logout');

Route::group(['middleware'=>['logcheck']], function(){
Route::get('admin', 'AdminController@index');
Route::get('header_master', 'AdminController@header_master');

Route::post('header_insert', 'HeaderController@save');
Route::post('header_delete', 'HeaderController@del');
Route::post('header_edit', 'HeaderController@edit');
Route::post('header_update', 'HeaderController@update');

Route::post('category_insert', 'HeaderController@savecat');
Route::post('category_delete', 'HeaderController@delcat');
Route::post('category_edit', 'HeaderController@editcat');
Route::post('category_update', 'HeaderController@updatecat');

Route::post('package_insert', 'HeaderController@savepackage');
Route::post('package_delete', 'HeaderController@delpackage');
Route::post('package_edit', 'HeaderController@editpackage');
Route::post('package_update', 'HeaderController@updatepackage');

Route::get('category_master', 'AdminController@category_master');
Route::get('package_master', 'AdminController@package_master');
Route::get('gallery_master', 'AdminController@gallery_master');


Route::post('gallery_insert', 'GalleryController@save');
Route::post('gallery_delete', 'GalleryController@del');
Route::post('gallery_edit', 'GalleryController@edit');
Route::post('gallery_update', 'GalleryController@update');

});

Route::group(['middleware'=>['loginchech']], function(){

    Route::get('admin_login', 'LoginController@index');
    Route::any('login', 'LoginController@login');
});