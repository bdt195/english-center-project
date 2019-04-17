<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;
use App\Category;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $postCollection = Post::all();
        return view('admin.pages.post.index', ['postCollection' => $postCollection]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categoryCollection = Category::select("*")
            ->whereNotNull('parent_id')
            ->get();

        return view('admin.pages.post.create', ['categoryCollection' => $categoryCollection]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $categoryId = $request->input('category-id');
        $title = $request->input('title');
        $content = $request->input('content');
        $author = $request->input('author');
        $status = $request->input('status');

        $post = new Post();
        $post->category_id = $categoryId;
        $post->title = $title;
        $post->content = $content;
        $post->author = $author;
        $post->status = $status;
        $post->save();

        return redirect()->action('Admin\PostController@index');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::findOrFail($id);

        $categoryCollection = Category::select("*")
            ->whereNotNull('parent_id')
            ->get();

        return view(
            'admin.pages.post.edit',
            [
                'post' => $post,
                'categoryCollection' => $categoryCollection
            ]
        );
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
        $post = Post::findOrFail($id);

        $categoryId = $request->input('category-id');
        $title = $request->input('title');
        $content = $request->input('content');
        $author = $request->input('author');
        $status = $request->input('status');

        $post->category_id = $categoryId;
        $post->title = $title;
        $post->content = $content;
        $post->author = $author;
        $post->status = $status;
        $post->save();

        return redirect()->action('Admin\PostController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();

        return redirect()->action('Admin\PostController@index');
    }
}
