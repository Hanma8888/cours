<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index(Request $request) {
        $paginate = Course::paginate(5);
        return view("index", ["all_courses"=>$paginate, compact('paginate')]);

    }
}
