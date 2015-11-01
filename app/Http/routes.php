<?php


/*
|--------------------------------------------------------------------------
| Routes for the landing page, posting logins & signins getting the page
|--------------------------------------------------------------------------
|
*/

Route::get('/', [
	'uses' => 'PagesController@landingpage',
	'as' => 'landingpage',
	]);




Route::get('/signUp',[ 
	'uses' => 'PagesController@signUp',
	'as' => 'signUp',
	]);

Route::post('/signUp',[ 
	'uses' => 'PagesController@signUp',

	]);


Route::get('/signIn',[ 
	'uses' => 'PagesController@signIn',
	'as' => 'signIn',
	]);

Route::post('/signIn',[ 
	'uses' => 'PagesController@signIn',
	]);




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