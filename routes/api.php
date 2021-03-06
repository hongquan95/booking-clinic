<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::group(['as' => 'api.'], function() {
    Route::middleware('auth:api')->get('/user', function (Request $request) {
        return response()->json($request->user());
    })->name('user');
    Route::group(['namespace' => 'API\User'], function() {
        Route::apiResource('clinic-types', 'ClinicTypeController')->only(['index', 'show']);
        Route::apiResource('clinics', 'ClinicController')->only(['index', 'show']);
        Route::post('login', 'AuthController@login')->name('login');
        Route::post('register', 'AuthController@register')->name('register');
        Route::post('facebook/login', 'AuthController@loginFacebook')->name('facebook.login') ;
        Route::group(['middleware' => 'auth:api'], function() {
            Route::post('logout', 'AuthController@logout')->name('logout');
            Route::put('password', 'AuthController@changePassword')->name('password');
            Route::put('profile', 'ProfileController@update')->name('update_profile');
            Route::apiResource('appointments', 'AppointmentController');
            Route::put('appointments/{appointment}/cancel', 'AppointmentController@cancel')->name('appointments.cancel');
            Route::get('appointments/{appointment}/result', 'AppointmentController@getResult')->name('appointments.result');
        });
    });
});
