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


/* Public Access (no account required) */
	// Home Page
	Route::get('/', 'PagesController@home');

	// Vision Page
	Route::get('vision', 'PagesController@vision');

	// About Pages
	Route::get('about', 'AboutController@about');
		Route::get('core-values', 'AboutController@coreValues');
		Route::get('public-mottos', 'AboutController@publicMottos');

	// Rush Page
	Route::get('rush', 'PagesController@rush');

	// Membership Pages
	Route::get('membership', 'MembershipController@membership');
		Route::get('membership/expectations', 'MembershipController@expectations');
		Route::get('membership/recruitment', 'MembershipController@recruitment');
		Route::get('membership/faqs', 'MembershipController@faqs');

	// Services Pages
	Route::get('services', 'ServicesController@services');
		Route::get('services/vpn', 'ServicesController@vpn');
		Route::get('services/studyrooms', 'ServicesController@studyRooms');
		Route::get('services/forum', 'ServicesController@forum');
		Route::get('services/email', 'ServicesController@email');
		Route::get('services/photography', 'ServicesController@photography');

	// Brothers Page
	Route::get('brothers', 'PagesController@brothers');

	// Contact Page
	Route::get('contact', 'PagesController@contact');

	// Events Page
	Route::get('events', 'PagesController@events');

/* Private Access (account required) */
	// Login & Registration
//	Route::controller('/', 'Auth\AuthController');

