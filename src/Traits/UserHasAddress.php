<?php

namespace AsLong\Address\Traits;

use AsLong\Address\Models\Address;

trait UserHasAddress
{

    public function addresses()
    {
        return $this->hasMany(Address::class);
    }

}