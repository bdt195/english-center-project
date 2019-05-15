<?php

namespace App\Http\Controllers;

use App\CourseCategory;
use App\Facility;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Course;
use Illuminate\Support\Facades\Input;

class CourseController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $course = Course::query();

        $facilityFilter = Input::get('facility');
        $categoryFilter = Input::get('category');

        if($facilityFilter){
            $course = $course->whereIn('facility_id', $facilityFilter);
        }

        if($categoryFilter){
            $course = $course->whereIn('category_id', $categoryFilter);
        }

        $courses = $course->get();

        $facilities = Facility::all();
        $categories = CourseCategory::all();
        return view('frontend.pages.course.index', [
            'courses' => $courses,
            'facilities' => $facilities,
            'categories' => $categories,
        ]);
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

        if(!Auth::check()){
            return view(
                'frontend.pages.course.detail',
                [
                    'course' => $course,
                    'isEnrolled' => null,
                    'isDuplicate' => null
                ]
            );
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

        return redirect()->back()->with('success', ['Bạn đã đăng ký thành công khóa học này']);
    }
}
