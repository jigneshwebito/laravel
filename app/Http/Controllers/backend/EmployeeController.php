<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use App\Models\Employee;
use Yajra\DataTables\DataTables;

class EmployeeController extends Controller
{
    //
    public function index(Request $request)
    {
        // $total_employee = Employee::orderBy('id', 'ASC')->get();

        // dd($total_employee);
        if ($request->ajax()) {
            $total_employee = Employee::orderBy('id', 'ASC')->withTrashed()->get();
        
        return Datatables::of($total_employee)
            ->addIndexColumn()
            ->addColumn('emp_name', function ($row) {
                return $row->name;
            })
            ->addColumn('emp_image', function ($row) {
                // $image = '';
                // $image_path = '/assets/img/team/' . $row->image;
                // $url = asset($image_path);
                // $image .= '<img src="' . $url . '" border="0" width="40" class="img-rounded" align="center" />';
                // return $image;
                $image = '';
                $url = asset('assets/img/team/' . $row->image);
                $image .= '<img src="' . $url . '" border="0" width="40" class="img-rounded" align="center" />';
                return $image;
            })
            ->addColumn('emp_position', function ($row) {
                return $row->position;
            })
            ->addColumn('action', function ($row) {
                $btn = "";

                $btn .= '<a href="' . url('employee/edit/' . $row->id)  . '">
                
                <div class="btn-group align-top">
                    <button class="btn btn-sm editBtn btn-success" type="button"><i class="ti-marker-alt"></i>
                        </button>
                </div>
                </a>';
                if ($row->deleted_at === null) {
                    $btn .= ' <div class="btn-group align-top" style="margin-left: 5px;">
                        <button class="btn btn-sm btn-danger deleteClient"
                        data-href="' . url('employee/delete/' . $row->id) . '" data-target="#deleteClientModel" data-id="' . $row->id . '"
                            type="button" data-toggle="modal"><i class=
                            "ti-trash"></i>
                            </button>
                    
                        </div>';
                }else{
                    $btn .= ' <a href="' . url('employee/restore/' . $row->id)  . '">
                    <div class="btn-group align-top" style="margin-left: 5px;">
                        <button class="btn btn-sm btn-danger"
                        
                            type="button">Restore
                            </button>
                            
                        </div>
                        </a>';
                }
                
                return $btn;
            })
            ->rawColumns(['action', 'name', 'emp_image'])
            ->make('true');
        }
    
        return view('backend.employee.index');
    }
    public function create()
    {
        return view('backend.employee.create');
    }
    public function EmployeeStore(Request $request)
    {
        try{
        $folderPath = public_path('assets/img/team/');

        $image_parts = explode(";base64,", $request->employee_front_image);
        $image_type_aux = explode("image/", $image_parts[0]);

        $image_type = $image_type_aux[1];
        $image_base64 = base64_decode($image_parts[1]);
 
        $imageName = $request->emp_img_name . '.webp';
 
        $imageFullPath = $folderPath.$imageName;
 
        file_put_contents($imageFullPath, $image_base64);

        $saveFile = new Employee;
        $saveFile->image = $imageName;
        $saveFile->name = $request->emp_name;
        $saveFile->content = $request->emp_content;
        $saveFile->position = $request->position;
        $saveFile->save();
        return Response::json(array('success' => true));
        } catch (\Throwable $th) {
            return Response::json(array('success' => 408));
        }
    }
    public function EmployeeEdit($id){

        $employee = Employee::where('id',$id)->first();
        return view('backend.employee.create')->with('employee', $employee);

    }
    public function EmployeeDelete($id)
    {
        Employee::where('id', $id)->delete();
        return redirect('/employee');
    }
    public function EmployeeRestore($id)
    {
        $record = Employee::withTrashed()->find($id);
        $record->restore();
        return redirect('/employee');
    }
}
