<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use App\Contact;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function show($id)
    {
        $category = Category::findOrFail($id);
        $posts = Post::where('category_id', $id)->where('status', 1)->get();
        return view('frontend.pages.category.index', ['category' => $category, 'posts' => $posts]);
    }
}
