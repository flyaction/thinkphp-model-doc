<?php

namespace flyaction\think;


class Service extends \think\Service
{
    public function register()
    {

        $this->commands([
            'modelDoc' => '\\flyaction\\think\\model\\command\\ModelDoc',
        ]);

    }
}