<?php

namespace Denkavia\Authenka\Facades;

use Denkavia\Authenka\Authenka as BaseClass;
use Denkavia\Authenka\Contracts\DriverContract;
use Illuminate\Support\Facades\Facade;

/**
 * @see DriverContract
 * @see BaseClass
 */
class Authenka extends Facade
{
    public static function getFacadeRoot(): string
    {
        return Authenka::class;
    }
}