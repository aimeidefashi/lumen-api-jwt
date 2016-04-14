<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Exceptions\TokenExpiredException;
use Tymon\JWTAuth\Exceptions\TokenInvalidException;

class Controller extends BaseController
{
    //
    public function index(){
    	return response()->json(
	        array(
	            'errcode' => 0,
	            'errmsg' => 'status is ok'
	        ));
    }
    public function show(){
    	return response()->json(
	        array(
	            'errcode' => -1,
	            'errmsg' => 'status is bad'
	        ));

    }
}
