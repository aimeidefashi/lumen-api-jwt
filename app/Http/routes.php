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
        'success' => [
            'app' => $app->version(),
        ],
    ];
});

$api = app('Dingo\Api\Routing\Router');

$api->version('v1', function($api){
    $api->group(['namespace' => 'App\Api\Controllers'],function($api){
        $api->group(['prefix' => 'auth'], function($api){
            $api->post('register', 'AuthenticateController@regUser');   # 注册
            $api->post('login', 'AuthenticateController@login');        # 登录
        });
        $api->group(['prefix' => 'user','middleware' =>['jwt.api.auth']], function($api){
            $api->get('logout', 'AuthenticateController@logout');       # 退出登录
            $api->get('/', 'UserController@me');                        # 查看个人信息
        });

    });
});

