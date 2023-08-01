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
        // dd($total_employee);
        if ($request->ajax()) {
            $total_employee = Employee::orderBy('id', 'ASC')->get();
        
        return Datatables::of($total_employee)
            ->addIndexColumn()
            ->addColumn('emp_name', function ($row) {
                return $row->name;
            })
            ->addColumn('emp_image', function ($row) {
                $image = '';
                $image_path = '/assets/img/team/' . $row->image;
                $url = asset($image_path);
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
                    <button class="btn btn-sm editBtn btn-success" type="button">Edit
                        <i class="fe fe-edit-2 ml-2"></i></button>
                </div>
                </a>';
                $btn .= ' <div class="btn-group align-top" style="margin-left: 5px;">
                <button class="btn btn-sm btn-danger diaDeleteBtn deleteCard"
                data-href="' . url('employee/delete/' . $row->id) . '" data-target="#deleteCardModel" data-id="' . $row->c_id . '"
                    type="button" data-toggle="modal" data-target="#smallModal">Delete
                    <i class="fe fe-trash-2"></i></button>
                    
                </div>';
                return $btn;
            })
            ->rawColumns(['action', 'name', 'image'])
            ->make('true');
        }
        // $employee = Employee::all();
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

        return view('backend.employee.create',['id',$id]);

    }
}
