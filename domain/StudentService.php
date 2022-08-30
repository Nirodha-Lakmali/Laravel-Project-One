<?php

namespace domain;

use App\Models\Student;

class StudentService{

    //get student data
    public function getStudent()
    {
        $students = Student::all();
        return $students;
    }

    //store student data
    public function storeStudent($data)
    {
    
        Student::create($data);
        
    }

}