<?php

namespace App\Http\Controllers;

use App\Models\{Employee,Client,Testimonials};
use Illuminate\Http\Request;
use Auth;

class AdminController extends Controller
{
    public function Logout()
    {
        Auth::logout();
        return Redirect()->route('login');
    }
    public function dashboard()
    {
        $data['employee'] = Employee::count();
        $data['client'] = Client::count();
        $data['testimonials'] = Testimonials::count();
        // dd($data);
        return view('admin.index',$data);
    }
}
