<?php

namespace flyaction\think;


class Service extends \think\Service
{
    public function boot()
    {

        $this->commands([
            'modelDoc' => command\ModelDoc::class
        ]);

    }
}