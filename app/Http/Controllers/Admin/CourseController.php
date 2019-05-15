<?php

namespace App\Http\Controllers\Admin;

use App\Facility;
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
        $facilities = Facility::all();
        return view('admin.pages.course.create', ['teachers' => $teachers, 'facilities' => $facilities]);
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
        $endDate = $request->input('end-date');
        $schedule = $request->input('schedule');
        $price = $request->input('price');
        $description = $request->input('description');
        $sortDescription = $request->input('sort-description');
        $teachers = $request->input('teacher');
        $facility = $request->input('facility');
        $status = $request->input('status');
        $showInSlider = $request->input('show-in-slider');

        $course = new Course();
        $course->code = $courseCode;
        $course->name = $name;
        $course->start_date = $startDate;
        $course->end_date = $endDate;
        $course->schedule = implode(",", $schedule);
        $course->price = $price;
        $course->description = $description;
        $course->sort_description = $sortDescription;
        $course->teachers = implode(",", $teachers);
        $course->facility_id = $facility;
        $course->status = $status;
        $course->show_in_slider = $showInSlider;

        if ($request->hasFile('avatar')) {
            $file = $request->avatar;
            $savedFile = $file->move('upload/course/image', time() . $file->getClientOriginalName());
            $course->avatar = $savedFile->getPathname();
        }

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
        $course = Course::findOrFail($id);
        $teachers = Teacher::all();
        $facilities = Facility::all();

        $course->teachers = explode(',', $course->teachers);
        $course->schedule = explode(',', $course->schedule);
        return view('admin.pages.course.edit', ['course' => $course, 'teachers' => $teachers, 'facilities' => $facilities]);
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

        $courseCode = $request->input('code');
        $name = $request->input('name');
        $startDate = $request->input('start-date');
        $endDate = $request->input('end-date');
        $schedule = $request->input('schedule');
        $price = $request->input('price');
        $description = $request->input('description');
        $sortDescription = $request->input('sort-description');
        $teachers = $request->input('teacher');
        $facility = $request->input('facility');
        $status = $request->input('status');
        $showInSlider = $request->input('show-in-slider');

        $course->code = $courseCode;
        $course->name = $name;
        $course->start_date = $startDate;
        $course->end_date = $endDate;
        $course->schedule = implode(",", $schedule);
        $course->price = $price;
        $course->sort_description = $sortDescription;
        $course->description = $description;
        $course->teachers = implode(",", $teachers);
        $course->facility_id = $facility;
        $course->status = $status;
        $course->show_in_slider = $showInSlider;

        if ($request->hasFile('avatar')) {
            $file = $request->avatar;
            $savedFile = $file->move('upload/course/image', time() . $file->getClientOriginalName());
            $course->avatar = $savedFile->getPathname();
        }

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
