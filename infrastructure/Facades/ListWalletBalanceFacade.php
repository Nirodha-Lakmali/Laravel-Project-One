<?php

namespace infrastructure\Facades;

use Illuminate\Support\Facades\Facade;

class ListWalletBalanceFacade extends Facade {

    protected static function getFacadeAccessor()
    {
        return 'infrastructure\ListWalletBalanceService';
    }

}