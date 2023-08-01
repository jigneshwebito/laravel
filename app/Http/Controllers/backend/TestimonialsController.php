<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Testimonials;
use Illuminate\Http\Request;

class TestimonialsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $tm = Testimonials::all();
        return view('backend.testimonials.index', ['tm' => $tm]);
    }

    public function tmDelete($id)
    {
        $tm = Testimonials::where('id', $id)->update([
            // 'images_path' => $request->images_path,
            'isDeleted' => 1,
        ]);
        return redirect('/testimonials');
    }
    public function tmShow($id)
    {
        $tm = Testimonials::where('id', $id)->update([
            // 'images_path' => $request->images_path,
            'isHide' => 0,
        ]);
        return redirect('/testimonials');
    }
    public function tmHide($id)
    {
        $tm = Testimonials::where('id', $id)->update([
            // 'images_path' => $request->images_path,
            'isHide' => 1,
        ]);
        return redirect('/testimonials');
    }

    public function tmActive($id)
    {
        $tm = Testimonials::where('id', $id)->update([
            // 'images_path' => $request->images_path,
            'isDeleted' => 0,
        ]);
        return redirect('/testimonials');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        return view('backend/testimonials/create');
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        // dd($request->all());
        // $request->validate([
        //     'image' => 'required|mimes:png,jpg,jpeg|max:5048'
        // ]);

        $newImageName = time() . '-' . $request->name . '.' . $request->image->extension();
        // dd($newImageName);
        $request->image->move(public_path('backend/images/testimonials'), $newImageName);
        // dd($test);
        $tm = Testimonials::create([
            'name' => $request->name,
            'description' => $request->description,
            'images_path' =>  $newImageName
        ]);
        return redirect('/testimonials');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function edit($id)
    {
        $tm = Testimonials::find($id);
        return view('backend.testimonials.edit')->with('tm', $tm);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, $id)
    {
        if ($request->image_path == null) {
            $tm = Testimonials::where('id', $id)->update([
                'name' => $request->name,
                'description' => $request->description,
            ]);
        } else {
            $newImageName = time() . '-' . $request->name . '.' . $request->image_path->extension();
            // dd($newImageName);
            $request->image_path->move(public_path('backend/images/testimonials'), $newImageName);
            $tm = Testimonials::where('id', $id)->update([
                'images_path' => $newImageName,
                'name' => $request->name,
                'description' => $request->description,
            ]);
        }

        return redirect('/testimonials');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
        $tm = Testimonials::find($id);
        $tm->delete();
        return redirect('/testimonials');
    }
}
