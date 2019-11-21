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
                          <button data-academic_id='$academic->academic_id' data-academic_year='$academic->academic' data-description='$academic->description' data-toggle=\"modal\" data-target=\"#editModal\" class='btn btn-sm btn-warning'><i class='fa fa-edit'></i></button>
                            ||
                          <a class=\"btn btn-sm btn-danger deleteRecord \" rel=\"$academic->academic_id\" rel1=\"delete-academic\" href=\"javascript:\" style='margin-right: 5px'><i class='fa fa-trash'></i></a>";
                }
                $return .= "</div>";
                return $return;
            })
            ->rawColumns([
                'action'
            ])
            ->make(true);
    }
    
    public function update(Request $request)
    {
        if ($request->isMethod('post'))
        {
            DB::beginTransaction();
    
            try{
                // Step 1 : Update Academic
                DB::table('academice')->where('academic_id',$request->academic_id)
                    ->update(['academic'=>$request->academic_year, 'description'=>$request->description]);
        
                DB::commit();
        
                return redirect()->back()->with('flash_message_success','Academic Updated Successfully');
        
            }catch(\Illuminate\Database\QueryException $e){
                DB::rollback();
                return redirect()->back()->withError($e->getMessage());
            }
        }
    }
    
    public function destroy($academic_id)
    {
        DB::table('academice')->where('academic_id',$academic_id)->delete();
        return redirect()->back()->with('flash_message_success','Academic Deleted Successfully');
    }
}
