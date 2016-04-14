<?php

namespace App\Api\Controllers\V1;
use App\Api\Controllers\BaseController;


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
