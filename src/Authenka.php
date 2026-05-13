<?php

namespace Denkavia\Authenka;

use Illuminate\Support\Manager;

class Authenka extends Manager
{
    public function getDefaultDriver()
    {
        return $this->config->get('authenka.default');
    }
}