<?php

namespace domain\Facades;

use Illuminate\Support\Facades\Facade;

class AssignStudentsFacade extends Facade {

    protected static function getFacadeAccessor()
    {
        return 'domain\AssignStudentsService';
    }

}