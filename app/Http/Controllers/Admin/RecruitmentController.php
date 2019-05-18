<?php

namespace App\Http\Controllers\Admin;

use App\Facility;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Recruitment;
use App\CV;
use Illuminate\Support\Facades\Input;

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
        $facilities = Facility::all();
        return view('admin.pages.recruitment.create', ['facilities' => $facilities]);
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
        $facilityId = $request->input('facility');

        $recruitment = new Recruitment();
        $recruitment->title = $title;
        $recruitment->content = $content;
        $recruitment->expire_date = $expireDate;
        $recruitment->facility_id = $facilityId;
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
        if(Input::has('action') && Input::has('cv')){
            $cvId = Input::get('cv');
            $action = Input::get('action');
            $cv = CV::findOrFail($cvId);
            $cv->status = $action == 0 ? 0 : 2;
            $cv->save();
            return redirect()->back()->with('success', ['Đã cập nhật thành công.']);
        }
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
