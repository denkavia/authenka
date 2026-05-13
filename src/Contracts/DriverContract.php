<?php

namespace Denkavia\Authenka\Contracts;

use Denkavia\Authenka\DataTransferObjects\UserData;

abstract class DriverContract
{
    abstract function getUserData(): UserData;
}