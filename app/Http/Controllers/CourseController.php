<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function __construct()
    {
        $this->middleware('web');
    }
    
    public function index()
    {
        return view('admin.course.manage_course');
    }
    
    public function create()
    {
        return view('admin.course.create');
    }
}
