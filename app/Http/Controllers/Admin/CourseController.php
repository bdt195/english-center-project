<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Course;
use App\Teacher;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courseCollection = Course::all();

        return view('admin.pages.course.index', ['courseCollection' => $courseCollection]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $teachers = Teacher::all();
        return view('admin.pages.course.create', ['teachers' => $teachers]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $courseCode = $request->input('code');
        $name = $request->input('name');
        $startDate = $request->input('start-date');
        $schedule = $request->input('schedule');
        $price = $request->input('price');
        $description = $request->input('description');
        $teachers = $request->input('teacher');

        $course = new Course();
        $course->course_code = $courseCode;
        $course->name = $name;
        $course->start_date = $startDate;
        $course->schedule = implode(",", $schedule);
        $course->price = $price;
        $course->description = $description;
        $course->teachers = implode(",", $teachers);
        $course->save();

        return redirect()->action('Admin\CourseController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $course = Course::findOrFail($id);
        return view('welcome', ['course' => $course]);
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
        $course = Course::findOrFail($id);

        $courseCode = $request->input('course-code');
        $name = $request->input('name');
        $startDate = $request->input('start-date');
        $schedule = $request->input('schedule');
        $price = $request->input('price');
        $description = $request->input('description');
        $teacherID = $request->input('teacher-id');

        $course->course_code = $courseCode;
        $course->name = $name;
        $course->start_date = $startDate;
        $course->schedule = $schedule;
        $course->price = $price;
        $course->description = $description;
        $course->teacher_id = $teacherID;
        $course->save();

        return redirect()->action('Admin\CourseController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $course = Course::findOrFail($id);
        $course->delete();
    }
}