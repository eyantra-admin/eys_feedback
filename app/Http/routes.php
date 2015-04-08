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

Route::get('/', 'WelcomeController@index');

Route::match(['GET', 'POST'], '/workshop/resources', [
		'as'	=> 'dwnResourcesLand',
		'uses'	=> 'EYSWorkshopController@downloadResourcesLand'
	]);

Route::match(['GET', 'POST'], '/workshop/resources/python2.7.9', [
		'as'	=> 'dwnPython2_7_9',
		'uses'	=> 'EYSWorkshopController@dwnldPython'
	]);

Route::match(['GET', 'POST'], '/workshop/resources/numpy', [
		'as'	=> 'dwnldPythonNumpy',
		'uses'	=> 'EYSWorkshopController@dwnldPythonNumpy'
	]);

Route::match(['GET', 'POST'], '/workshop/resources/opencv', [
		'as'	=> 'dwnldOpenCV',
		'uses'	=> 'EYSWorkshopController@dwnldOpenCV'
	]);

Route::match(['GET', 'POST'], '/workshop/feedback', [
		'as'	=> 'feedback_form',
		'uses'	=> 'EYSWorkshopController@feedback'
	]);
