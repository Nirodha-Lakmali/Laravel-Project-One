<?php

namespace infrastructure\Facades;

use Illuminate\Support\Facades\Facade;

class SellTradeFacade extends Facade {

    protected static function getFacadeAccessor()
    {
        return 'infrastructure\SellTradeService';
    }

}