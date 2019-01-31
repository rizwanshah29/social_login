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
Auth::Routes();

Route::get('/', function () {
    return view('welcome');
});


//Facebook Routes
Route::get('/fbredirect', 'SocialAuthFacebookController@redirect');
Route::get('/fbcallback', 'SocialAuthFacebookController@callback');

//Google Routes
Route::get('/googleredirect', 'SocialAuthGoogleController@redirect');
Route::get('/googlecallback', 'SocialAuthGoogleController@callback');


Route::get('/home', 'HomeController@index')->name('home');

Route::get('/tplogin',function (){
    return view('logintemp');
});
