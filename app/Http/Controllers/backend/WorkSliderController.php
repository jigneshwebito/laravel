<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\WorkSlider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Intervention\Image\Facades\Image;

class WorkSliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $tm =  WorkSlider::all();
        return view('backend.workslider.index', ['tm' => $tm]);
    }

    public function tmDelete($id)
    {
        $tm =  WorkSlider::find($id);
        $tm->delete();
        return redirect('/work-slider');
    }
    public function tmShow($id)
    {
        $tm =  WorkSlider::where('id', $id)->update([
            // 'images_path' => $request->images_path,
            'isHide' => 0,
        ]);
        return redirect('/work-slider');
    }
    public function tmHide($id)
    {
        $tm =  WorkSlider::where('id', $id)->update([
            // 'images_path' => $request->images_path,
            'isHide' => 1,
        ]);
        return redirect('/work-slider');
    }

    public function tmActive($id)
    {
        $tm =  WorkSlider::where('id', $id)->update([
            // 'images_path' => $request->images_path,
            'isDeleted' => 0,
        ]);
        return redirect('/work-slider');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        return view('backend/workslider/create');
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
        $path = $request->profile_image;
        $image_name = str_replace('C:\fakepath\\', '', $path);
        dd($image_name);
        $folderPath = public_path('assets/img/index/work-slider/');

        $image_parts = explode(";base64,", $request->image);
        $image_type_aux = explode("image/", $image_parts[0]);
        $image_type = $image_type_aux[1];
        $image_base64 = base64_decode($image_parts[1]);

        $imageName = uniqid() . '.png';

        $imageFullPath = $folderPath . $imageName;

        file_put_contents($imageFullPath, $image_base64);

        $saveFile = new  WorkSlider;
        $saveFile->image = $imageName;
        $saveFile->name = $request->name;
        $saveFile->save();

        return response()->json(['success' => 'Crop Image Uploaded Successfully']);


        // $newImageName = time() . '-' . $request->name . '.' . $request->image->extension();
        // $request->image->move(public_path('backend/images/ WorkSlider'), $newImageName);
        // $tm =  WorkSlider::create([
        //     'name' => $request->name,
        //     'image' =>  $newImageName
        // ]);
        // return redirect('/work-slider');
    }
    public function ClientsStore(Request $request)
    {
        // try {
            $image_name = $request->Profile_image_card;
            // dd($path);
            // $image_name = str_replace('C:\fakepath\\', '', $path);
            // dd($image_name);
            $saveFile = new  WorkSlider;
            //PROFILE FRONT IMAGE
            if ($request->Profile_image_card) {
                $file_image = $request->file('Profile_image_card');
                $file_image_rename = str_replace(' ', '_', $file_image);
                $image_name = date('YmdHi') . $image_name->getClientOriginalName();
                $file1 = $file_image->move(public_path('/assets/img/Portfolio/app/'), $image_name);
                // $inputs['profile_photo'] = $image_name;
                $saveFile->image = $image_name;
            } else {
                $saveFile->image = null;
            }
            $saveFile->name = $request->name;
            $saveFile->year = $request->year;
            $saveFile->review = $request->review;
            $saveFile->save();
            return redirect('/work-slider');
            // return Response::json(array('success' => true));
        // } catch (\Throwable $th) {
        //     return Response::json(array('success' => 408));
        // }
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
        $tm =  WorkSlider::find($id);
        return view('backend.workslider.edit')->with('tm', $tm);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request)
    {
        try {

            $saveFile = [];
            //  $saveFile->name = $imageName;

            //PROFILE FRONT IMAGE
            if ($request->p_image && $request->p_imagePathProfileFront) {
                $original_image_parts = explode(";base64,", $request->p_imagePathProfileFront);
                $original_image_base64 = base64_decode($original_image_parts[1]);
                $imageDimension = getimagesizefromstring($original_image_base64);

                if ($imageDimension[0] > 500 && $imageDimension[1] > 500) {
                    $imagePath  = Image::make($request->p_imagePathProfileFront)->resize(500, 500)->encode('data-url');
                    $imageArr = explode(";base64,", $imagePath);
                    $data = base64_decode($imageArr[1]);
                } else {
                    $imageArr = explode(";base64,",  $request->p_imagePathProfileFront);
                    $data = $original_image_base64;
                }

                $extension = explode("image/", $imageArr[0]);
                $original_name = 3 . '-' . uniqid() . '.' . $extension[1];

                $imageName = public_path('/assets/img/Portfolio/app/' . $original_name);

                file_put_contents($imageName, $data);

                $saveFile['image'] = $original_name;
            }
            $saveFile['name'] = $request->name;
            $saveFile['year'] = $request->year;
            $saveFile['review'] = $request->review;
            WorkSlider::where('id', $request->id)->update($saveFile);

            return Response::json(array('success' => true));
        } catch (\Throwable $th) {
            return Response::json(array('success' => 408));
        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
        $tm =  WorkSlider::find($id);
        $tm->delete();
        return redirect('/work-slider');
    }
}
