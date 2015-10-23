<?php


/*
|--------------------------------------------------------------------------
| Routes for the landing pages posting logins & getting the page
|--------------------------------------------------------------------------
|
*/

Route::get('/', [
	'uses' => 'PagesController@landingpage',
	'as' => 'landingpage',
	]);
Route::post('/',[ 
	'uses' => 'PagesController@test',
	]);

/*
|--------------------------------------------------------------------------
| Routes for the dashboard
|--------------------------------------------------------------------------
|
*/

Route::get('/dashboard',[
		'uses' => 'PagesController@dashboard',
		'as' =>  'dashboard',
	
	]);

Route::get('/new-innings',[
		'uses' => 'PagesController@newinnings',
		'as' => 'newinnings',

	]);
Route::get('/settings',[
		'uses' => 'PagesController@settings',
		'as' => 'settings',

	]);

Route::get('/stats',[
		'uses' => 'PagesController@getStats',
		'as' => 'stats',

	]);