<?php

namespace Denkavia\Authenka\DataTransferObjects;

use Illuminate\Support\Collection;

readonly final class UserData
{
    protected Collection $permissions;

    protected Collection $roles;

    public function __construct(
        array|Collection $permissions,
        array|Collection $roles,
    )
    {
        if (is_array($permissions)) {
            $this->permissions = collect($permissions);
        }

        if (is_array($roles)) {
            $this->roles = collect($roles);
        }
    }

    public function getPermissions(): Collection
    {
        return $this->permissions;
    }

    public function getRoles(): Collection
    {
        return $this->roles;
    }
}