<?php

namespace Denkavia\Authenka\Contracts;

use Denkavia\Authenka\DataTransferObjects\UserData;

interface CanAuthorizeUser
{
    public function hasPermissions(...$permissions): bool;

    public function hasRoles(...$roles): bool;

    public function hasAnyPermissions(...$permissions): bool;

    public function hasAnyRoles(...$roles): bool;

    public function can(...$permissions): bool;

    public function is(...$roles): bool;

    public function getPermissions(): array;

    public function getRoles(): array;

    public function getUserData(): UserData;
}