<?php

namespace App\Api\Controllers;
use JWTAuth;
use Dingo\Api\Routing\Helpers;
use App\Http\Controllers\Controller;

class BaseController extends Controller
{
    // 接口帮助调用
    use Helpers;

    /**
     * 获取用户信息
     * @return object
     */
    protected function getUser()
    {
        $user = JWTAuth::parseToken()->authenticate();
        if (!$user) {
            return response()->json(array(
                'errcode' => 400101,
                'errmsg' => '用户信息不存在'
            ), 404);
        }

        return $user;
    }


}
