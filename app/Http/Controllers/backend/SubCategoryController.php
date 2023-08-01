<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SubCategory;


class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $article_subCategory = SubCategory::all();

        return view('backend.article-SubCategory.index')->with('article_subCategory', $article_subCategory);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('backend.article-SubCategory.create');

    }
    public function sDelete($id)
    {
        $article_Subcategory = SubCategory::where('id', $id)->update([
            // 'images_path' => $request->images_path,
            'isDeleted' => 1,
        ]);
        return redirect('/articles_subCategory');
    }
    public function sShow($id)
    {
        $article_Subcategory = SubCategory::where('id', $id)->update([
            // 'images_path' => $request->images_path,
            'isHide' => 0,
        ]);
        return redirect('/articles_subCategory');
    }
    public function sHide($id)
    {
        $article_Subcategory = SubCategory::where('id', $id)->update([
            // 'images_path' => $request->images_path,
            'isHide' => 1,
        ]);
        return redirect('/articles_subCategory');
    }

    public function sActive($id)
    {
        $article_Subcategory = SubCategory::where('id', $id)->update([
            // 'images_path' => $request->images_path,
            'isDeleted' => 0,
        ]);
        return redirect('/articles_subCategory');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $article_subCategory = SubCategory::create([
            'name' => $request->name,

        ]);
        return redirect('/articles_subCategory');
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
        $article_subCategory = SubCategory::find($id);
        // dd($article_Subcategory);
        return view('backend.article-SubCategory.edit')->with('article_subCategory', $article_subCategory);
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
        $tm = SubCategory::where('id', $id)->update([
            'name' => $request->name,
            // 'description' => $request->description,
        ]);
        return redirect('/articles_subCategory');

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
