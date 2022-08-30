<?php

namespace infrastructure\Facades;

use Illuminate\Support\Facades\Facade;

class ApiBinanceFacade extends Facade {

    protected static function getFacadeAccessor()
    {
        return 'infrastructure\ApiBinanceService';
    }

}