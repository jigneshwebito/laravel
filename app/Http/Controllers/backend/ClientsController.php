<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Intervention\Image\Facades\Image;

class ClientsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $tm = Client::all();
        return view('backend.client.index', ['tm' => $tm]);
    }

    public function tmDelete($id)
    {
        $tm = Client::where('id', $id)->delete();
        return redirect('/clients');
    }
    public function tmShow($id)
    {
        $tm = Client::where('id', $id)->update([
            // 'images_path' => $request->images_path,
            'isHide' => 0,
        ]);
        return redirect('/clients');
    }
    public function tmHide($id)
    {
        $tm = Client::where('id', $id)->update([
            // 'images_path' => $request->images_path,
            'isHide' => 1,
        ]);
        return redirect('/clients');
    }

    public function tmActive($id)
    {
        $tm = Client::where('id', $id)->update([
            // 'images_path' => $request->images_path,
            'isDeleted' => 0,
        ]);
        return redirect('/clients');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        return view('backend/client/create');
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
        $folderPath = public_path('assets/img/index/clients/');

        $image_parts = explode(";base64,", $request->image);
        $image_type_aux = explode("image/", $image_parts[0]);
        $image_type = $image_type_aux[1];
        $image_base64 = base64_decode($image_parts[1]);
 
        $imageName = uniqid() . '.png';
 
        $imageFullPath = $folderPath.$imageName;
 
        file_put_contents($imageFullPath, $image_base64);
 
         $saveFile = new Client;
         $saveFile->image = $imageName;
         $saveFile->name = $request->name;
         $saveFile->save();
    
        return redirect('/clients')->json(['success'=>'Crop Image Uploaded Successfully']);


        // $newImageName = time() . '-' . $request->name . '.' . $request->image->extension();
        // $request->image->move(public_path('backend/images/client'), $newImageName);
        // $tm = Client::create([
        //     'name' => $request->name,
        //     'image' =>  $newImageName
        // ]);
        // return redirect('/clients');
    }
    public function ClientsStore(Request $request)
    {
        try {
           
            $saveFile = new Client;
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
               
                $imageName = public_path('/assets/img/index/clients/' . $original_name);

                file_put_contents($imageName, $data);

                $saveFile->image = $original_name;
           
            } else {
                $saveFile->image = null;
            }
            $saveFile->name = $request->name;
            $saveFile->alt = $request->alt;
            $saveFile->link = $request->link;
            $saveFile->save();

            return Response::json(array('success' => true));
        } catch (\Throwable $th) {
            return Response::json(array('success' => 408));
        }
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
        $tm = Client::find($id);
        return view('backend.client.edit')->with('tm', $tm);
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

                $imageName = public_path('/assets/img/index/clients/' . $original_name);

                file_put_contents($imageName, $data);

                $saveFile['image'] = $original_name;
            }
            $saveFile['name'] = $request->name;
            $saveFile['alt'] = $request->alt;
            $saveFile['link'] = $request->link;
            Client::where('id', $request->id)->update($saveFile);

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
        $tm = Client::find($id);
        $tm->delete();
        return redirect('/clients');
    }
}
