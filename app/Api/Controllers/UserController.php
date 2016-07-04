<?php
namespace App\Api\Controllers;
use App\Api\Models\Users;
use Illuminate\Http\Request;
class UserController extends BaseController{



    /**
     * 查看个人信息
     * @return Response.json
     */
    public function me(){
        return response()->json(
            array(
                'errcode' => 0,
                'errmsg' => 'success.',
                'data' => $this->getUser()
            ), 200);
    }

}
