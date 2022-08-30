<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreStudentRequest;
use domain\Facades\StudentFacade;
use Illuminate\Support\Facades\Session;
use App\Models\Course;


class StudentController extends Controller
{

    public function index()
    {
        return view('students');      
    }


    public function store(StoreStudentRequest $request)
    {
        $data = $request->all();
        StudentFacade::storeStudent($data);
        Session::flash('success','Students Data added successfully.');
        return redirect('students');

    }
    
}
