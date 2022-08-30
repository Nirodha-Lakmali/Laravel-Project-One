<?php

namespace infrastructure\Facades;

use Illuminate\Support\Facades\Facade;

class LeverageChangeFacade extends Facade {

    protected static function getFacadeAccessor()
    {
        return 'infrastructure\LeverageChangeService';
    }

}