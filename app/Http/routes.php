<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('home.home');
});

Route::get('auth', function(){
    return OAuth::authorize('facebook');
});

Route::get('login', function(){
   
    OAuth::login('facebook', function($user, $details) {
        $user->name = $details->full_name;
        $user->email = $details->email;
        $user->provider_user_id = $details->id;
        $user->save();
    });

    return view('home.registro');
});