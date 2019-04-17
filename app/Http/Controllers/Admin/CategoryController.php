<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categoryCollection = Category::all();
        return view('admin.pages.category.index', ['categoryCollection' => $categoryCollection]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categoryCollection = Category::select("*")
            ->whereNull('parent_id')
            ->orWhere('parent_id', 1)
            ->get();

        return view('admin.pages.category.create', ['categoryCollection' => $categoryCollection]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $name = $request->input('category-name');
        $parentId = $request->input('parent-category-id');

        $category = new Category();
        $category->name = $name;
        $category->parent_id = $parentId;
        $category->save();

        return redirect()->action('Admin\CategoryController@index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if($id == 1)
            return redirect()->action('Admin\CategoryController@index');

        $category = Category::findOrFail($id);

        $categoryCollection = Category::select("*")
            ->whereNull('parent_id')
            ->orWhere([
                ['parent_id', 1],
                ['id', '<>', $category->id]
            ])
            ->get();

        return view(
            'admin.pages.category.edit',
            [
                'category' => $category,
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
        $category = Category::findOrFail($id);

        $name = $request->input('category-name');
        $parentId = $request->input('parent-category-id');

        $category->name = $name;
        $category->parent_id = $parentId;
        $category->save();

        return redirect()->action('Admin\CategoryController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();

        return redirect()->action('Admin\CategoryController@index');
    }
}
