<?php

namespace domain\Facades;

use Illuminate\Support\Facades\Facade;

class CourseFacade extends Facade {

    protected static function getFacadeAccessor()
    {
        return 'domain\CourseService';
    }

}