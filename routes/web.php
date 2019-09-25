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

Route::get('/', function () {
    return redirect()->route('home');
});
//frontend route
Route::get('home', 'FrontPageController@home')->name('home');
Route::get('Single_page_view/{id}', 'FrontPageController@Single_page_view')->name('Single_page_view');
Route::get('gallery', 'FrontPageController@gallery')->name('gallery');
Route::get('notice', 'FrontPageController@notice')->name('notice');
Route::get('notice_single/{id}', 'FrontPageController@notice_single')->name('notice_single');

Route::get('teacher', 'FrontPageController@teacher')->name('teacher');
Route::get('contact', 'FrontPageController@contact')->name('contact');


Route::get('logout', function(){
    Auth::logout();
    return Redirect::to('login');
})->name('logout');

Auth::routes();






//admin route
Route::group(['as'=>'admin.','prefix'=>'admin','namespace'=>'Admin','middleware'=>'admin'],function(){
    Route::get('dashbord','DashbordController@index')->name('dashbord');
    //menu
    Route::get('menu','DashbordController@menu')->name('menu');
    Route::get('menu_save','DashbordController@menu_save')->name('menu_save');
    Route::get('menu_delete/{id}','DashbordController@menu_delete')->name('menu_delete');

    Route::get('submenu','DashbordController@submenu')->name('submenu');
    Route::get('sub_menu_save','DashbordController@sub_menu_save')->name('sub_menu_save');
    Route::get('submenu_delete/{id}','DashbordController@submenu_delete')->name('submenu_delete');

//page content save
    Route::get('single_page_content/{id}','PageController@single_page_content')->name('single_page_content');
    Route::post('page_content_save/{id}','PageController@page_content_save')->name('page_content_save');

//    website info
    Route::get('contact_info','DashbordController@contact_info')->name('contact_info');
    Route::post('contact_info_save/{id}','DashbordController@contact_info_save')->name('contact_info_save');

//    gallary
    Route::get('gallery','DashbordController@gallery')->name('gallery');
    Route::post('gallery_save','DashbordController@gallery_save')->name('gallery_save');
    Route::get('gallery_delete/{id}','DashbordController@gallery_delete')->name('gallery_delete');
//    slider
    Route::get('slider','DashbordController@slider')->name('slider');
    Route::post('slider_save','DashbordController@slider_save')->name('slider_save');
    Route::get('slider_delete/{id}','DashbordController@slider_delete')->name('slider_delete');

//    notice
    Route::get('notice','DashbordController@notice')->name('notice');
    Route::post('notice_save','AdminController@notice_save')->name('notice_save');
    Route::get('notice_delete/{id}','AdminController@notice_delete')->name('notice_delete');

//    teacher
    Route::get('teacher','AdminController@teacher')->name('teacher');
    Route::post('teacher_save','AdminController@teacher_save')->name('teacher_save');
    Route::get('teacher_delete/{id}','AdminController@teacher_delete')->name('teacher_delete');

//    home page content
    Route::get('home_page_content','PageController@home_page_content')->name('home_page_content');
    Route::post('home_page_content_save','PageController@home_page_content_save')->name('home_page_content_save');




});
