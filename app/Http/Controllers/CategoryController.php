<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;


class CategoryController extends Controller
{
    public function get_category(){
        $categories = Category::with(['courses.writer'])->get();
        $courses = $categories->pluck('courses')->flatten();
        return view('main.home', compact('categories', 'courses'));
    }

    public function get_detail($id){    
        $category = Category::with(['courses'])->find($id);
        return view('course.category_detail', compact('category'));
    }   
}
