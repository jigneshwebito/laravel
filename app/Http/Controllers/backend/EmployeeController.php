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
        
        if ($request->ajax()) {
            $total_employee = Employee::orderBy('id', 'ASC')->withTrashed()->get();
        
        return Datatables::of($total_employee)
            ->addIndexColumn()
            ->addColumn('emp_name', function ($row) {
                return $row->name;
            })
            ->addColumn('emp_image', function ($row) {
                $image = '';
                $url = asset('assets/img/team/' . $row->image);
                if($row->deleted_at == null)
                {
                    $image .= '<img src="' . $url . '" border="0" width="40" class="img-rounded" align="center" style="    height: 5rem;
                    width: 5rem;
                    object-fit: cover;
                    border-radius: 50%;"/>';
                }
                else{
                    $image .= '<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTfQYY3o2AXfHGYLK8AyrX_JTCM7ozjji2uwXSNnwo&s" border="0" width="40" class="img-rounded" align="center" style="    height: 5rem;
                    width: 5rem;
                    object-fit: cover;
                    border-radius: 50%;"/>';
                }
                return $image;
            })
            ->addColumn('emp_position', function ($row) {
                if($row->position == 1)
                {
                    return "Senior";
                }else if($row->position == 2)
                {
                    return "Junior";
                }else{
                    return "Fresher";
                }
            })
            ->addColumn('action', function ($row) {
                $btn = "";

                $btn .= '<a href="' . url('employee/edit/' . $row->id)  . '">
                
                <div class="btn-group align-top">
                    <button class="waves-effect waves-light btn btn-info btn-circle editBtn" type="button">
                    <span class="mdi mdi-eye mdi-18px"></span>
                        </button>
                </div>
                </a>';
                if ($row->deleted_at === null) {
                    $btn .= ' <div class="btn-group align-top" style="margin-left: 5px;">
                        <button class="waves-effect waves-light btn btn-danger btn-circle deleteClient"
                        data-href="' . url('employee/delete/' . $row->id) . '" data-target="#deleteClientModel" data-id="' . $row->id . '"
                            type="button" data-toggle="modal"><span class="mdi mdi-delete mdi-18px"></span>
                            </button>
                    
                        </div>';
                }else{
                    $btn .= ' <a href="' . url('employee/restore/' . $row->id)  . '">
                    <div class="btn-group align-top" style="margin-left: 5px;">
                        <button class="waves-effect waves-light btn btn-sm btn-warning btn-circle"
                        
                            type="button"><span class="ti-upload" style="font-size:17px"></span>                             
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
