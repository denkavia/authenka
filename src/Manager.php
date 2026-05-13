<?php

namespace Denkavia\Authenka;

class Manager extends \Illuminate\Support\Manager
{
    public function getDefaultDriver()
    {
        return $this->config->get('authenka.default');
    }
}