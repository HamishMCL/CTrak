<?php


/*
|--------------------------------------------------------------------------
| Routes for the landing page, posting logins & getting the page
|--------------------------------------------------------------------------
|
*/

Route::get('/', [
	'uses' => 'PagesController@landingpage',
	'as' => 'landingpage',
	]);
Route::post('/',[ 
	'uses' => 'PagesController@signIn',
	]);


// Route::post('/landingpage/{id}',[ 
// 	'uses' => 'PagesController@signIn',
// 	'as' => 'test',
// 	]);

/*
|--------------------------------------------------------------------------
| Routes for getting the dashboard
|--------------------------------------------------------------------------
|
*/

Route::get('/dashboard',[

		'uses' => 'PagesController@dashboard',
		'as' =>  'dashboard',
	
	]);

/*
|--------------------------------------------------------------------------
| Routes for new-innings pages and storing new innings in the database
|--------------------------------------------------------------------------
|
*/

Route::get('/new-innings',[
		'uses' => 'PagesController@newinnings',
		'as' => 'new-innings',

	]);
Route::post('/new-innings',[
	'uses' => 'PagesController@storeNewInnings',

	]);


Route::get('/settings',[
		'uses' => 'PagesController@settings',
		'as' => 'settings',

	]);

Route::get('/stats',[
		'uses' => 'PagesController@getStats',
		'as' => 'stats',

	]);