<?php

namespace App\Api\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Auth\Authenticatable;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Database\Eloquent\Model;

class Users extends Model implements AuthenticatableContract, JWTSubject
{
    use SoftDeletes, Authenticatable;


    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    public static  $rules = [
        'password' => array('required', 'alpha_dash','confirmed'),
        'password_confirmation' => array('required'),
        'email' => array('email', 'unique:users,email'),
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['password', 'email'];
    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password'];
    public $timestamps = true;

    // jwt 需要实现的方法
    public function getJWTIdentifier()
    {
        return $this->id;
    }

    // jwt 需要实现的方法
    public function getJWTCustomClaims()
    {
        return [];
    }
}
