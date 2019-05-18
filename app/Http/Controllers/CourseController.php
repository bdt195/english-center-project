<?php

namespace App\Http\Controllers;

use App\CourseCategory;
use App\Facility;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Course;
use App\Teacher;
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
        $startDate = Input::get('date');
        $endDate = Input::get('end-date');
        $status = Input::get('status');

        if($status){
            $course = $course->where('status', $status);
        }

        if($startDate){
            $startDate1 = $startDate[0];
            $startDate2 = $startDate[1];
            $course = $course->whereBetween('start_date', [$startDate1, $startDate2]);
        }

        if($endDate){
            $endDate1 = $endDate[0];
            $endDate2 = $endDate[1];
            $course = $course->whereBetween('end_date', [$endDate1, $endDate2]);
        }

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
        $teachers = explode(',', $course->teachers);
        $teachers = Teacher::whereIn('id', $teachers)->get();
        $course->teachers = $teachers;
        $isEnrolled = false;
        $isDuplicate = false;
        if($students->where('id', Auth::id())->count() !=0 ){
            $isEnrolled = true;
        }



        if(!Auth::check()){
            $scheduleTable = [
                1 => 'Sáng thứ hai',
                4 => 'Sáng thứ ba',
                7 => 'Sáng thứ tư',
                10 => 'Sáng thứ năm',
                13 => 'Sáng thứ sáu',
                16 => 'Sáng thứ báy',
                19 => 'Sáng chủ nhật',
                3 => 'Chiều thứ hai',
                6 => 'Chiều thứ ba',
                9 => 'Chiều thứ tư',
                12 => 'Chiều thứ năm',
                15 => 'Chiều thứ sáu',
                18 => 'Chiều thứ báy',
                21 => 'Chiều chủ nhật',
                2 => 'Tối thứ hai',
                5 => 'Tối thứ ba',
                8 => 'Tối thứ tư',
                11 => 'Tối thứ năm',
                14 => 'Tối thứ sáu',
                17 => 'Tối thứ báy',
                20 => 'Tối chủ nhật',
            ];

            $schedule = explode(',', $course->schedule);
            $course->schedule = $schedule;
            $x = [];
            foreach($course->schedule as $item){
                $x[] = $scheduleTable[$item];
            }
            $course->schedule= $x;
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

        $scheduleTable = [
            1 => 'Sáng thứ hai',
            4 => 'Sáng thứ ba',
            7 => 'Sáng thứ tư',
            10 => 'Sáng thứ năm',
            13 => 'Sáng thứ sáu',
            16 => 'Sáng thứ báy',
            19 => 'Sáng chủ nhật',
            3 => 'Chiều thứ hai',
            6 => 'Chiều thứ ba',
            9 => 'Chiều thứ tư',
            12 => 'Chiều thứ năm',
            15 => 'Chiều thứ sáu',
            18 => 'Chiều thứ báy',
            21 => 'Chiều chủ nhật',
            2 => 'Tối thứ hai',
            5 => 'Tối thứ ba',
            8 => 'Tối thứ tư',
            11 => 'Tối thứ năm',
            14 => 'Tối thứ sáu',
            17 => 'Tối thứ báy',
            20 => 'Tối chủ nhật',
        ];

        $currentSchedule = explode(',', $course->schedule);
        $course->schedule = $currentSchedule;

        $x = [];
        foreach($course->schedule as $item){
            $x[] = $scheduleTable[$item];
        }

        $course->schedule = $x;

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
