<?php

namespace infrastructure\Facades;

use Illuminate\Support\Facades\Facade;

class BuyTradeFacade extends Facade {

    protected static function getFacadeAccessor()
    {
        return 'infrastructure\BuyTradeService';
    }

}