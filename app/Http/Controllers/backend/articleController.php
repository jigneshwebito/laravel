<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Articals;
use App\Models\article_tag;
use App\Models\Article_category;
use Carbon\Carbon;
use DateTime;
use App\Models\SubCategory;




class articleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $articles = Articals::all();
        $article_tag = article_tag::all();
        $article_category = Article_category::where('sub_category', '=', null)->get();
        $article_sub_category = Article_category::where('sub_category', '!=', null)->get();

        $data = [
            'article_tag' => $article_tag,
            'article_category' => $article_category,
            'article_sub_category' => $article_sub_category,
            'articles' => $articles,

        ];
        // dd(1);

        return view('backend.article.index', $data);
    }
    public function changeStatus(Request $request)
    {
        // $user = Articals::find($request->user_id);
        // $user->active_status = $request->radio;
        // $user->save();

        return response()->json(['success' => 'Status change successfully.']);
    }



    public function articleDelete($id)
    {
        $articles = Articals::where('id', $id)->update([
            // 'images_path' => $request->images_path,
            'isDeleted' => 1,
        ]);
        return redirect('/articles');
    }
    public function articleShow($id)
    {
        $articles = Articals::where('id', $id)->update([
            // 'images_path' => $request->images_path,
            'isHide' => 0,
        ]);
        return redirect('/articles');
    }
    public function articleHide($id)
    {
        $articles = Articals::where('id', $id)->update([
            // 'images_path' => $request->images_path,
            'isHide' => 1,
        ]);
        return redirect('/articles');
    }

    public function articleActive($id)
    {
        $articles = Articals::where('id', $id)->update([
            // 'images_path' => $request->images_path,
            'isDeleted' => 0,
        ]);
        return redirect('/articles');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $article_tag = article_tag::all();


        $article_category = Article_category::where('sub_category', '=', null)->get();
        $article_sub_category = Article_category::where('sub_category', '!=', null)->get();


        $data = [
            'article_tag' => $article_tag,
            'article_category' => $article_category,
            'article_sub_category' => $article_sub_category,

        ];

        // dd($article_tag);


        return view('backend.article.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $newImageName = time() . '-' . $request->name . '.' . $request->image->extension();
        // dd($newImageName);
        $request->image->move(public_path('backend/images/articles'), $newImageName);
        // dd($test);
        $date = new DateTime("today");
        $date =  $date->format('y-m-d');
        $articles = Articals::create([
            'title' => $request->title,
            'category' => json_encode($request->category),
            'sub_category' => json_encode($request->sub_category),
            'banner_image' =>  $newImageName,
            'video_url' => $request->video,
            'tags' => json_encode($request->tags),
            's_description' => $request->s_description,
            'description' => $request->editor1,
            'future_date' => $request->birthday,
            'publication_status' => $request->status,
            'active_status' => $request->radio,
            'date' => $date,
        ]);
        return redirect('/articles');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }
    public function changeUserStatus(Request $request)
    {
        $user = Articals::find($request->id);
        $user->active_status = $request->active_status;
        $user->save();

        return response()->json(['success' => 'User status change successfully.']);
    }
    public function changePublicationStatus(Request $request)
    {
        $status = Articals::find($request->id);

        $status->publication_status = $request->status;
        $status->save();

        return response()->json(['success' => 'User status change successfully.']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        // $article_category = Article_category::all();
        $articles = Articals::find($id);
        $article_tag = article_tag::all();
        // $article_subCategory = SubCategory::all();

        $article_category = Article_category::where('sub_category', '=', null)->get();
        $article_sub_category = Article_category::where('sub_category', '!=', null)->get();

        $data = [
            'articles' => $articles,
            'article_category' => $article_category,
            'article_tag' => $article_tag,
            // 'article_subCategory' => $article_subCategory,
            'article_sub_category' => $article_sub_category,


        ];

        return view('backend.article.edit', $data);
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
        //
        if ($request->banner_image == null) {
            $articles = Articals::where('id', $id)->update([
                'title' => $request->title,
                'category' => json_encode($request->category),
                'sub_category' => json_encode($request->sub_category),
                'video_url' => $request->video,
                'tags' => json_encode($request->tags),
                's_description' => $request->s_description,
                'description' => $request->editor1,
                'future_date' => $request->birthday,
                'publication_status' => $request->status,
                'active_status' => $request->radio,
            ]);
        } else {
            $newImageName = time() . '-' . $request->name . '.' . $request->banner_image->extension();
            // dd($newImageName);
            $request->banner_image->move(public_path('backend/images/articles'), $newImageName);
            $articles = Articals::where('id', $id)->update([
                'title' => $request->title,
                'category' => json_encode($request->category),
                'sub_category' => json_encode($request->sub_category),

                'banner_image' =>  $newImageName,
                'video_url' => $request->video,
                'tags' => json_encode($request->tags),

                's_description' => $request->s_description,
                'description' => $request->editor1,
                'future_date' => $request->birthday,
                'publication_status' => $request->status,
                'active_status' => $request->radio,
                // 'name' => $request->name,
                // 'description' => $request->description,
            ]);
        }
        return redirect('/articles');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
