<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article_category;
use App\Models\SubCategory;
use phpDocumentor\Reflection\Types\Null_;

class ArticleCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $article_category = Article_category::all();

        return view('backend.article-category.index')->with('article_category', $article_category);
    }
    public function changeCategoryStatus(Request $request)
    {
        $user = Article_category::find($request->id);

        $user->active_status = $request->active_status;
        $user->save();

        return response()->json(['success' => 'User status change successfully.']);
    }

    public function articleDelete($id)
    {
        $article_category = Article_category::where('id', $id)->update([
            // 'images_path' => $request->images_path,
            'isDeleted' => 1,
        ]);
        return redirect('/articles_category');
    }
    public function articleShow($id)
    {
        $article_category = Article_category::where('id', $id)->update([
            // 'images_path' => $request->images_path,
            'isHide' => 0,
        ]);
        return redirect('/articles_category');
    }
    public function articleHide($id)
    {
        $article_category = Article_category::where('id', $id)->update([
            // 'images_path' => $request->images_path,
            'isHide' => 1,
        ]);
        return redirect('/articles_category');
    }

    public function articleActive($id)
    {
        $article_category = Article_category::where('id', $id)->update([
            // 'images_path' => $request->images_path,
            'isDeleted' => 0,
        ]);
        return redirect('/articles_category');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $article_category = Article_category::where('sub_category', '=', null)->get();

        return view('backend.article-category.create')->with('article_category', $article_category);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->sub_category);
        $insert_article_category =  new Article_category();
        $insert_article_category->category = $request->name;
        $insert_article_category->active_status = $request->radio;
        if ($request->image != null) {
            $newImageName = time() . '-' . $request->name . '.' . $request->image->extension();
            $request->image->move(public_path('backend/images/category'), $newImageName);
            $insert_article_category->banner_image = $newImageName;
        }
        if ($request->sub_category != null) {
            $insert_article_category->sub_category = $request->sub_category;
        }
        $insert_article_category->save();
        return redirect('/articles_category');
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $article_category = Article_category::find($id);
        // dd($article_category);
        return view('backend.article-category.edit')->with('article_category', $article_category);
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
            $articles = Article_category::where('id', $id)->update([
                'category' => $request->name,
                'active_status' => $request->radio,
            ]);
        } else {
            $newImageName = time() . '-' . $request->name . '.' . $request->banner_image->extension();
            // dd($newImageName);
            $request->banner_image->move(public_path('backend/images/category'), $newImageName);
            $articles = Article_category::where('id', $id)->update([
                'category' => $request->name,
                'active_status' => $request->radio,
                'banner_image' =>  $newImageName,

                // 'name' => $request->name,
                // 'description' => $request->description,
            ]);
        }

        $article_category = Article_category::where('id', $id)->update([
            'category' => $request->name,
            'active_status' => $request->radio,
        ]);
        return redirect('/articles_category');
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
