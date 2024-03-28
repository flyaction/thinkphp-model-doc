<?php

namespace flyaction\think;

use think\Service as BaseService;

class Service extends BaseService
{
    public function register()
    {

        $this->commands([
            'modelDoc' => '\\flyaction\\think\\command\\model\\ModelDoc',
        ]);

    }
}