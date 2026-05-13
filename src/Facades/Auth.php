<?php

namespace Denkavia\Authenka\Facades;

use Denkavia\Authenka\Contracts\CanAuthorizeUser;
use Denkavia\Authenka\Contracts\CanManageUserAuthorizationData;
use Illuminate\Contracts\Auth\Authenticatable;

/**
 * @method static Authenticatable|CanAuthorizeUser|CanManageUserAuthorizationData|null user()
 */
class Auth extends \Illuminate\Support\Facades\Auth
{

}