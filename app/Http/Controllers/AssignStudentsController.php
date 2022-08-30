<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreAssignStudentsRequest;
use domain\Facades\AssignStudentsFacade;
use domain\Facades\StudentFacade;
use domain\Facades\CategoryFacade;
use Illuminate\Support\Facades\Session;
use App\Models\Student;
use App\Models\Course;
use App\Models\Category;

class AssignStudentsController extends Controller
{
    //get student data and category data
    public function index()
    {
        $students = StudentFacade::getStudent();
        $categories = CategoryFacade::getCategory();
     
        return view('assign-students')->with('students',$students)->with('categories',$categories);  
    }


    //get dynamic dropdown courses data
    public function fetch($category_id)
    {
        $courses = AssignStudentsFacade::dynamicDropdown($category_id);
   
        return response()->json([
            'status' =>1,
            'courses' => $courses
        ]);
        
       
    }   


    //assign students to courses
    public function store(StoreAssignStudentsRequest $request)
    {
        $data = $request->all();

        AssignStudentsFacade::assignStudents($data);

        Session::flash('success','Students assigned successfully.');

        return redirect('assign-students');
        
    }
   
}
