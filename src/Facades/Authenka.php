<?php

namespace Denkavia\Authenka\Facades;

use Denkavia\Authenka\Contracts\DriverContract;
use Denkavia\Authenka\Manager;
use Illuminate\Support\Facades\Facade;

/**
 * @see DriverContract
 * @see Manager
 */
class Authenka extends Facade
{
    public static function getFacadeRoot(): string
    {
        return Authenka::class;
    }
}