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
use App\User;

Route::get('/', function () {
    if (Auth::check())
    {
        if (Auth::user()->password == "")
            return view('home.registro');

        if (Auth::user()->password != "")
            return view('inicio.inicio');
    }else
    {
        return view('home.home');
    }
});

Route::get('auth', function () {
    return OAuth::authorize('facebook');
});

Route::get('logout', array('as' => 'logout', function () {
}))->before('auth');


Route::get('login', function () {
    try {

         OAuth::login('facebook', function ($user, $details) {
            $exist = User::where('email', $details->email)->first();

            if($exist){
                $user = $exist;
            }

             $user->name = $details->full_name;
             $user->email = $details->email;
             $user->provider_user_id = $details->id;

             return $user;
        });

        $user = Auth::user();

        if ($user->password == "")
            return view('home.registro');
        else
            return Redirect::guest('inicio');

    } catch (ApplicationRejectedException $e) {
        // Usuario Rechazó aplicación
    } catch (InvalidAuthorizationCodeException $e) {
        // Autorización se intentó con código no válido, probable intento de falsificación
    } catch(PDOException $e){
        $autoOpenModalLogin = true;
        return redirect()->guest('home')->with('$autoOpenModalLogin', $autoOpenModalLogin);
    }

});

Route::filter('auth', function ($route, $request) {
    if (Auth::guest())
        return Redirect::guest('/');

    if (Auth::user()->password == "")
        return view('home.registro');
});


Route::resource('/users', 'UserController');

Route::post('/users/validatemail', 'UserController@validatemail');

Route::group(array('before' => 'auth'), function () {
    Route::get('inicio', function () {
        return view('inicio.inicio');
    });
});


