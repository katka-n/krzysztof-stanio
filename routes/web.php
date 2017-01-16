<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('index');
});


Route::get('blog', function()
{
    return view('index-1');
});

Route::get('absolwenci', function()
{
    return view('index-2');
});

Route::get('kurs', function()
{
    return view('index-3');
});

Route::get('kontakt', function()
{
    return view('index-4');
});

Route::get('privacy_policy', function()
{
    return view('index-5');
});



Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});


