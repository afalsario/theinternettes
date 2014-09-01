<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('index');
});

Route::get('about-us', function()
{
	return View::make('about-us');
});

Route::get('portfolio', function()
{
	return View::make('portfolio');
});

Route::get('services', function()
{
	return View::make('services');
});

Route::get('blog', function()
{
	return View::make('blog');
});

Route::get('contact', 'ContactController@getContact');

Route::post('contact_request', 'ContactController@getContactForm');