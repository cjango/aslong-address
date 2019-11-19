<?php

namespace AsLong\Address\Models;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{

    /**
     * Notes: 上级地区
     * @Author: <C.Jason>
     * @Date: 2019/11/19 3:01 下午
     * @return mixed
     */
    public function parent()
    {
        return $this->belongsTo(Area::class, 'parent_id');
    }

    /**
     * Notes: 下级地区
     * @Author: <C.Jason>
     * @Date: 2019/11/19 3:01 下午
     * @return mixed
     */
    function children()
    {
        return $this->hasMany(Area::class, 'parent_id');
    }

}