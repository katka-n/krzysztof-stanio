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

// zapisanie adresu e-mail do bazy maailingowej
Route::post('save', [
    'uses' => 'NewsletterController@store',
    'as' => 'email.save',
]);

//index
Route::get('/', [
    'uses' => 'PostController@index',
    'as' => 'index',
]);

//blog
Route::get('/blog', [
    'uses' => 'PostController@blog_index',
    'as' => 'blog',
]);

Route::get('blog/{name}', [
    'uses' => 'PostController@entry',
    'as' => 'posts',
]);

//absolwenci
Route::get('absolwenci', [
    'uses' => 'GraduatesController@index',
    'as' => 'absolwenci',
]);

Route::get('graduates/{id}', [
    'uses' => 'GraduatesController@single_graduate',
    'as' => 'graduates',
]);

//kirs
Route::get('kurs', function()
{
    return view('index-3');
});

//formularz kontaktowy
Route::get('kontakt', [
    'as' => 'contact',
    'uses' => 'ContactFormController@get',
]);

Route::post('kontakt', [
    'as' => 'contact',
    'uses' => 'ContactFormController@send',
]);

// routingi Voyagera
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});


