<?php

namespace AsLong\Address\Models;

use AsLong\Address\Contracts\Addressbook;
use AsLong\Address\Scopes\OrderScope;
use AsLong\Address\Traits\Addressable;
use AsLong\Address\Traits\HasArea;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Address extends Model implements Addressbook
{

    use Addressable, HasArea, SoftDeletes;

    /**
     * @var array
     */
    protected $guarded = [
        'created_at',
        'updated_at',
    ];

    public static function boot()
    {
        parent::boot();
        static::addGlobalScope(new OrderScope);
    }

    /**
     * Notes: 关联用户
     * @Author: <C.Jason>
     * @Date: 2019/11/19 3:34 下午
     * @return mixed
     */
    public function user()
    {
        return $this->belongsTo(config('cart.user_model'));
    }

    /**
     * Notes: 将地址设置为默认地址
     * @Author: <C.Jason>
     * @Date: 2019/11/19 3:31 下午
     */
    public function setDefault()
    {
        Address::where('user_id', $this->user_id)->update(['def' => 0]);

        $address      = $this->refresh();
        $address->def = 1;
        $address->save();

        return true;
    }

}
