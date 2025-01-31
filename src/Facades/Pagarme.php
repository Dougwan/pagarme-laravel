<?php

namespace Dougwn\Pagarme\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Dougwn\Pagarme\Pagarme
 */
class Pagarme extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Dougwn\Pagarme\Pagarme::class;
    }
}
