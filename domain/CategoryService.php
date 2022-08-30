<?php

namespace domain;

use App\Models\Category;
use Illuminate\Support\Facades\Validator;


class CategoryService{

    //get category data
    public function getCategory()
    {
        $categories = Category::all();
        return $categories;
    }

    //store category data
    public function storeCategory($data)
    {       
        Category::create($data);   
        
    }
  
}