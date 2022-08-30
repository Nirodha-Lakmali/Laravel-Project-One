<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use domain\Facades\CategoryFacade;
use App\Http\Requests\StoreCategoryRequest;
use Illuminate\Support\Facades\Session;
use App\Models\Category;

class CategoryController extends Controller
{

    public function index()
    {   
        $categories = CategoryFacade::getCategory();
        return view('categories')->with('categories',$categories);      
    }
    

    public function store(StoreCategoryRequest $request)
    {
        $data = $request->all();  
        CategoryFacade::storeCategory($data);
        Session::flash('success','Category added successfully.');
        return redirect('categories');
        
    }

    
}
