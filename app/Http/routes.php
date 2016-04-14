<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/
$app->get('/', function () use ($app) {
    return [
            'version' => '0.0.1'
    ];
});

$api = app('Dingo\Api\Routing\Router');

$api->version('v1', ['namespace' => 'App\Api\Controllers\V1'], function ($api) {
	$api->group(['middleware' => 'jwt.auth'], function($api) {
		$api->get('/show', 'Controller@show');
	
	});
	$api->get('/index', 'Controller@index');
	


}); 
