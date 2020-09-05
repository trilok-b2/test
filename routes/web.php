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

Route::get('locale/{locale}', function ($locale){
    Session::put('locale', $locale);
    return redirect()->back();
});
Route::get('/', function () {
    return view('welcome');
});
Route::resource('ajaxItems','ItemController');
Route::resource('video','VideoController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('video-show','ItemController@video_show');