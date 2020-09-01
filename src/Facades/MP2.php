<?php

namespace agusabas\LaravelMercadoPago\Facades;

use Illuminate\Support\Facades\Facade;

class MP2 extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'MP2';
    }
}
