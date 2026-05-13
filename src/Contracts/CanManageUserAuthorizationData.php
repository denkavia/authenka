<?php

namespace Denkavia\Authenka\Contracts;

interface CanManageUserAuthorizationData
{
    public function setUserRoles(array $roles): static;

    public function setUserPermissions(array $permissions): static;

    public function attachRoles(array $role): static;

    public function attachPermissions(array $permission): static;

    public function detachRoles(array $roles): static;

    public function detachPermissions(array $permissions): static;
}