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

use App\Ad;

Route::get('/', function () {
    return view('welcome');
});
Route::resource('/frontend','FrontendController');
Route::get('/createpost','FrontendController@showform');
Route::post('/newpost','FrontendController@createpost')->name('newpost');
Route::post('/createevent','FrontendController@createevent')->name('newevent');
Route::get('/userdashboard','FrontendController@showuserdashboard')->name('userdashboard');
Route::get('/userallads','FrontendController@userallads')->name('userallads');
Route::get('/profilesetting','FrontendController@profilesetting')->name('setting');
Route::post('/updatephoto','FrontendController@updateprofilephoto')->name('updatephoto');
Route::get('/privacysetting','FrontendController@privacysetting')->name('privacysetting');
Route::get('/showtest',function(){

    $temp = Ad::find(2)->get();



    return $temp;
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/subcategory/{subcategory}','FrontendController@getsubcategories');
Route::get('/subccategory/{subcategory}','FrontendController@getsubccategories');

