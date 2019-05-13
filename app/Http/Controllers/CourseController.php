<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Course;

class CourseController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $courses = Course::all();
        return view('frontend.pages.course.index', ['courses' => $courses]);
    }

    public function show($id)
    {
        $course = Course::findOrFail($id);
        $students = $course->students;
        $isEnrolled = false;
        $isDuplicate = false;
        if($students->where('id', Auth::id())->count() !=0 ){
            $isEnrolled = true;
        }

        $userCourses = Auth::user()->courses;
        $schedule = '';
        foreach($userCourses as $item){
            $schedule .= $item->schedule . ',';
        }
        $schedule = array_filter(explode(',', $schedule));
        $currentCourseSchedule = explode(',', $course->schedule);

        if(count(array_intersect($schedule, $currentCourseSchedule)) > 0){
            $isDuplicate = true;
        };

        return view(
            'frontend.pages.course.detail',
            [
                'course' => $course,
                'isEnrolled' => $isEnrolled,
                'isDuplicate' => $isDuplicate
            ]
        );
    }

    public function enroll(Request $request, $id){
        $userId = Auth::id();
        DB::table('student_course')->insert([
            [
                'course_id' => $id,
                'student_id' => $userId,
            ]
        ]);
    }
}
