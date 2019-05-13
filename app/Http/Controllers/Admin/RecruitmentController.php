<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Recruitment;

class RecruitmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recruitmentCollection = Recruitment::all();
        return view('admin.pages.recruitment.index', ['recruitmentCollection' => $recruitmentCollection]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.recruitment.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $title = $request->input('title');
        $content = $request->input('content');
        $expireDate = $request->input('expire-date');

        $recruitment = new Recruitment();
        $recruitment->title = $title;
        $recruitment->content = $content;
        $recruitment->expire_date = $expireDate;
        $recruitment->save();

        return redirect()->action('Admin\RecruitmentController@index');
    }

    /**
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $recruitment = Recruitment::findOrFail($id);

        return view('admin.pages.recruitment.show',['recruitment' => $recruitment]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $recruitment = Recruitment::findOrFail($id);

        return view('admin.pages.recruitment.edit',['recruitment' => $recruitment]);
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
        $recruitment = Recruitment::findOrFail($id);

        $title = $request->input('title');
        $content = $request->input('content');
        $expireDate = $request->input('expire-date');

        $recruitment->title = $title;
        $recruitment->content = $content;
        $recruitment->expire_date = $expireDate;
        $recruitment->save();

        return redirect()->action('Admin\RecruitmentController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $recruitment = Recruitment::findOrFail($id);
        $recruitment->delete();

        return redirect()->action('Admin\RecuitmentController@index');
    }
}
