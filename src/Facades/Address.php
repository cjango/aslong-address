<?php

namespace AsLong\Address\Facades;

use Illuminate\Support\Facades\Facade;

class Address extends Facade
{

    public static function getFacadeAccessor()
    {
        return \AsLong\Address\Address::class;
    }

}