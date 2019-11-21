<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashBoardController extends Controller
{
    public function __construct()
    {
        $this->middleware('web');
    }
    
    public function dashboard()
    {
        return view('admin.dashboard');
    }
}
