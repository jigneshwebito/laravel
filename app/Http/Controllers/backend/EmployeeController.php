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
        try {
            $image_name = $request->employee_image;
            $saveFile = new  Employee;
            //EMPLOYEE IMAGE
            if ($request->employee_image) {
                $file_image = $request->file('employee_image');
               
                $image_name = $request->emp_img_name;
                $file1 = $file_image->move(public_path('/assets/img/team/'), $image_name);
               
                $saveFile->image = $image_name;
            } else {
                $saveFile->image = null;
            }
            $saveFile->name = $request->emp_name;
            $saveFile->image = $request->emp_img_name;
            $saveFile->content = $request->emp_content;
            if($request->position == "senior")
            {
                $saveFile->position = 1;

            }elseif($request->position == "junior"){
                $saveFile->position = 2;

            }else{
                $saveFile->position = 3;
            }
            $saveFile->save();
            return redirect('/employee');
        } catch (\Throwable $th) {
            return redirect('/employee');
        }
    }
    public function EmployeeUpdate(Request $request)
    {
        try {
            $saveFile = [];
            $image_name = $request->employee_image;
            //EMPLOYEE IMAGE
            if ($request->employee_image) {
                $file_image = $request->file('employee_image');
                $image_name = $request->emp_img_name;
                $file1 = $file_image->move(public_path('/assets/img/team/'), $image_name);
               
                $saveFile['image'] = $image_name;
            } else {
                $saveFile['image'] = null;
            }
            $saveFile['name'] = $request->emp_name;
            $saveFile['image'] = $request->emp_img_name;
            $saveFile['content'] = $request->emp_content;
            if($request->position == "senior")
            {
                $saveFile['position'] = 1;
            }elseif($request->position == "junior"){
                $saveFile['position'] = 2;
            }else{
                $saveFile['position'] = 3;
            }
            Employee::where('id',$request->emp_id)->update($saveFile);
            return view('backend.employee.index');

        } catch (\Throwable $th) {
            return redirect('/employee');

        }
    }
    public function EmployeeEdit($id){

        $employee = Employee::where('id',$id)->withTrashed()->first();
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
