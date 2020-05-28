<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DateTimeInterface;

class UserAddress extends Model
{
    //
    protected $appends = ['contact'];
    /**
     * 不可被批量赋值的属性。
     *
     * @var array
     */
    protected $guarded = ['contact_phone'];

    /**
     * 为数组 / JSON 序列化准备日期。
     *
     * @param  \DateTimeInterface  $date
     * @return string
     */
    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format($this->dateFormat ?: 'Y-m-d H:i:s');
    }
    /**
     *  获取用户的姓名.
     *
     * @param  string  $value
     * @return string
     */
    public function getContactAttribute()
    {
        return "{$this->contact_name}";
    }
    /**
     *  获取用户的姓名.
     *
     * @param  string  $value
     * @return string
     */
    public function getContactNameAttribute($value)
    {
        return $value.'333333';
    }


}
