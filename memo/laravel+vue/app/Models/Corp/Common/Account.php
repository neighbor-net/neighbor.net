<?php

namespace App\Models\Corp\Common;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Account extends Authenticatable
{
    protected $table = 'account';
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'code', 'name', 'active',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'username','password',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [];

    /**
     * URLに対しアクセス権限があるか
     *
     * @param string $url
     * @return bool
     */
    public function isAllow($url='')
    {
        // ここでrole,resourceテーブルを用いたアクセス制御を行う
        return true;
    }
}
