<?php

namespace App\Http\Controllers;

use App\Academic;
use Illuminate\Http\Request;
use DB;
use Yajra\DataTables\Facades\DataTables;

class AcademicController extends Controller
{
    public function __construct()
    {
        $this->middleware('web');
    }
    
    public function index()
    {
        return view('admin.academic.index');
    }
    
    public function store(Request $request)
    {
        if ($request->isMethod('post'))
        {
            DB::beginTransaction();
    
            try{
                // Step 1 : Create Academic
                $academic = new Academic();
                $academic->academic = $request->academic_year;
                $academic->description = $request->description;
                $academic->save();
        
                DB::commit();
        
                return redirect()->back()->with('flash_message_success','Academic Added Successfully');
        
            }catch(\Illuminate\Database\QueryException $e){
                DB::rollback();
                return redirect()->back()->withError($e->getMessage());
            }
        }
    }
    
    public function getData()
    {
        $academic = Academic::all();
        
        return DataTables::of($academic)
            
            ->editColumn('action', function ($academic) {
                $return = "<div class=\"btn-group\">";
                if (!empty($academic->academic))
                {
                    $return .= "
                          <a href=\"\" class='btn btn-sm btn-warning'><i class='fa fa-edit'></i></a>
                            ||
                          <a class=\"btn btn-sm btn-danger deleteRecord \" rel=\"$academic->academic_id\" rel1=\"delete\" href=\"javascript:\" style='margin-right: 5px'><i class='fa fa-trash'></i></a>";
                }
                $return .= "</div>";
                return $return;
            })
            ->rawColumns([
                'action'
            ])
            ->make(true);
    }
}
