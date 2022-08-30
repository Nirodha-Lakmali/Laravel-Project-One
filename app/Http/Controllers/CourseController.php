<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreCourseRequest;
use domain\Facades\CourseFacade;
use domain\Facades\CategoryFacade;
use Illuminate\Support\Facades\Session;
use App\Models\Course;
use App\Models\Category;

class CourseController extends Controller
{

    public function index()
    {
        $categories = CategoryFacade::getCategory();
        return view('courses')->with('categories',$categories);
    }


    public function store(StoreCourseRequest $request)
    {
        $data = $request->all();   
        CourseFacade::storeCourse($data);
        Session::flash('success','Course added successfully.');
        return redirect('courses');
        
        
    }
    
}
