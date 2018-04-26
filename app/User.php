<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public static function get_list () {
        return Self::select('users.*', 'chucvu.ten as ten')
            ->leftJoin('chucvu', 'users.option_id', '=', 'chucvu.option_id')
            ->get();
    }

    public static function get_user_by_id ($id) {
        return Self::select('users.*', 'chucvu.ten as ten')
            ->where('users.id', '=', $id)
            ->leftJoin('chucvu', 'users.option_id', '=', 'chucvu.option_id')
            ->first();
    }
}
