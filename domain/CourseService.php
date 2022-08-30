<?php

namespace domain;


use App\Models\Course;

class CourseService{

    //store courses data
    public function storeCourse($data)
    {
        Course::create($data);
    }
}