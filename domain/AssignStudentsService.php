<?php

namespace domain;

use App\Models\Course_Student;
use App\Models\Course;

class AssignStudentsService{

    public function dynamicDropdown($category_id)
    {
        $courses = Course::category($category_id);

        return $courses;
    }

    //assign students to courses
    public function assignStudents($data)
    {
        Course_Student::create($data);
    }
    
}