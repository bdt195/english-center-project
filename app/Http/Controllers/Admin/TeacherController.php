<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Teacher;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teacherCollection = Teacher::all();
        return view('admin.pages.teacher.index', ['teacherCollection' => $teacherCollection]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.teacher.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $firstName = $request->input('first-name');
        $lastName = $request->input('last-name');
        $email = $request->input('email');
        $phoneNumber = $request->input('phone-number');

        $teacher = new Teacher();
        $teacher->first_name = $firstName;
        $teacher->last_name = $lastName;
        $teacher->email = $email;
        $teacher->phone_number = $phoneNumber;
        $teacher->save();

        return redirect()->action('Admin\TeacherController@index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $teacher = Teacher::findOrFail($id);

        return view('admin.pages.teacher.edit', ['teacher' => $teacher]);
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
        $teacher = Teacher::findOrFail($id);

        $firstName = $request->input('firstname');
        $lastName = $request->input('lastname');
        $email = $request->input('email');
        $phoneNumber = $request->input('phone-number');


        $teacher->firstname = $firstName;
        $teacher->lastName = $lastName;
        $teacher->email = $email;
        $teacher->phone_number = $phoneNumber;
        $teacher->save();

        return redirect()->action('Admin\TeacherController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $teacher = Teacher::findOrFail($id);
        $teacher->delete();

        return redirect()->action('Admin\PostController@index');
    }
}
