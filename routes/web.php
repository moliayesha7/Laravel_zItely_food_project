<?php

use Illuminate\Support\Facades\Route;

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
//frontend route


Route::get('/', function () {
    return view('frontend.home');
});



Route::get('blog', function () {
    return view('frontend.blog');
});

Route::get('news', function () {
    return view('frontend.news');
});

Route::get('location', function () {
    return view('frontend.location');
});

Route::get('reservation', function () {
    return view('frontend.reservation');
});
Route::get('gallery','GalleryManagement@viewStudent');






//backend route




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



//Staff Route
Route::resource('our-staff','StaffManagement');
Route::get('staff','StaffManagement@showStaffPage');


//menu route
Route::resource('our-menu-category','MenuCatManagement');

Route::resource('our-menu','MenuManagement');
Route::get('menu','MenuManagement@menuPage');


//post-category route
Route::resource('post-category','PostCatManagement');


//post route
Route::resource('post','PostManagement');

Route::get('blog','PostManagement@postPage');