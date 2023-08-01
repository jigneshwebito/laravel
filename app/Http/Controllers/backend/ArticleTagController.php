<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\article_tag;

class ArticleTagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $article_tag = article_tag::all();
        // dd($article_tag);
        return view('backend.article-tag.index')->with('article_tag', $article_tag);
    }
    public function changeCategoryTagStatus(Request $request)
    {
        $user = article_tag::find($request->id);

        $user->active_status = $request->active_status;
        $user->save();

        return response()->json(['success' => 'User status change successfully.']);
    }
    public function tagDelete($id)
    {
        $article_tag = article_tag::where('id', $id)->update([
            // 'images_path' => $request->images_path,
            'isDeleted' => 1,
        ]);
        return redirect('/articles_tag');
    }
    public function tagShow($id)
    {
        $article_tag = article_tag::where('id', $id)->update([
            // 'images_path' => $request->images_path,
            'isHide' => 0,
        ]);
        return redirect('/articles_tag');
    }
    public function tagHide($id)
    {
        $article_tag = article_tag::where('id', $id)->update([
            // 'images_path' => $request->images_path,
            'isHide' => 1,
        ]);
        return redirect('/articles_tag');
    }

    public function tagActive($id)
    {
        $article_tag = article_tag::where('id', $id)->update([
            // 'images_path' => $request->images_path,
            'isDeleted' => 0,
        ]);
        return redirect('/articles_tag');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('backend.article-tag.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $article_tag = article_tag::create([
            'name' => $request->name,
            'active_status' => $request->radio,

        ]);
        return redirect('/articles_tag');
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
        $article_tag = article_tag::find($id);
        // dd($article_tag);
        return view('backend.article-tag.edit')->with('article_tag', $article_tag);
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
        $tm = article_tag::where('id', $id)->update([
            'name' => $request->name,
            'active_status' => $request->radio,

            // 'description' => $request->description,
        ]);
        return redirect('/articles_tag');
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
