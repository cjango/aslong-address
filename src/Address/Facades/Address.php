<?php

namespace AsLong\Address\Facades;

use Illuminate\Support\Facades\Facade;

class Address extends Facade
{

    public static function getFacadeAccessor(): string
    {
        return \AsLong\Address\Address::class;
    }

}