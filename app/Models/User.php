<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //
    /**
     * 不可批量赋值的属性。
     *
     * @var array
     */
    protected $guarded = ['name'];


}
