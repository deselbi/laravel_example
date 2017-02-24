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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/sanitizing/form', function () {
    return view('sanitizing.form');
});

Route::post('/sanitizing/form', function () {
    return request()->all();
});


Route::prefix('fluent')->group(function () {
    Route::name('fluentroute')->get('/route', function (){
        return 'fluentroute';
    });
});


Route::prefix('protected')->middleware('auth')->group(function () {
    Route::get('/', function (){
        return 'requires login';
    });

    Route::middleware('throttle')->get('/throttle', function (){
        return 'throttle';
    });
});


Route::prefix('blade-components-and-slots/')->group(function () {
    Route::get('components', function (){
        return view('blade-components-and-slots.components');
    });


});
