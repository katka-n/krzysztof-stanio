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

Route::post('save', [
    'uses' => 'NewsletterController@store',
    'as' => 'email.save',
]);


Route::get('/', [
    'uses' => 'PostController@index',
    'as' => 'index',
]);

Route::get('/blog', [
    'uses' => 'PostController@blog_index',
    'as' => 'blog',
]);

Route::get('blog/{name}', [
    'uses' => 'PostController@entry',
    'as' => 'posts',
]);


Route::get('absolwenci', [
    'uses' => 'GraduatesController@index',
    'as' => 'absolwenci',
]);

Route::get('graduates/{name}', [
    'uses' => 'GraduatesController@single_graduate',
    'as' => 'graduates',
]);


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


