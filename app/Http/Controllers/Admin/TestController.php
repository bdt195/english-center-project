<?php

namespace App\Http\Controllers\Admin;

use App\Facility;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Test;
use App\CourseCategory;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testCollection = Test::all();
        return view('admin.pages.test.index', ['testCollection' => $testCollection]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $studentCollection = Test::findOrFail($id)->students;

        if(Input::has('student') && Input::has('action')){
            $studentId = Input::get('student');
            $action = Input::get('action');
            $value = Input::get('value');

            if($action == 'edit'){
                if($value == 1){
                    DB::table('student_test')->where('test_id', $id)->where('student_id', $studentId)->update(['status' => 1]);
                }
                elseif($value == 0){
                    DB::table('student_test')->where('test_id', $id)->where('student_id', $studentId)->update(['status' => 0]);
                }
            }
            elseif($action == 'delete'){
                DB::table('student_test')->where('test_id', $id)->where('student_id', $studentId)->delete();
            }


            return redirect()->back()->with('success', ['Đã cập nhật thành công.']);
        }

        return view('admin.pages.test.show', ['studentCollection' => $studentCollection]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $courseCategory = CourseCategory::all();
        $facilities = Facility::all();
        return view('admin.pages.test.create',
            [
                'courseCategory' => $courseCategory,
                'facilities' => $facilities
            ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $code = $request->input('code');
        $date = $request->input('date');
        $facilityId = $request->input('facility');
        $schedule = $request->input('schedule');
        $courseCategoryId = $request->input('category');
        $status = $request->input('status');

        $test = new Test();
        $test->code = $code;
        $test->date = $date;
        $test->facility_id = $facilityId;
        $test->schedule = $schedule;
        $test->category_id = $courseCategoryId;
        $test->status = $status;
        $test->save();

        return redirect()->action('Admin\TestController@index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $test = Test::findOrFail($id);
        $courseCategory = CourseCategory::all();
        $facilities = Facility::all();

        return view('admin.pages.test.edit',
            [
                'test' => $test,
                'courseCategory' => $courseCategory,
                'facilities' => $facilities,
            ]);
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
        $test = Test::findOrFail($id);

        $code = $request->input('code');
        $date = $request->input('date');
        $facilityId = $request->input('facility');
        $schedule = $request->input('schedule');
        $courseCategoryId = $request->input('category');
        $status = $request->input('status');

        $test->code = $code;
        $test->date = $date;
        $test->facility_id = $facilityId;
        $test->schedule = $schedule;
        $test->category_id = $courseCategoryId;
        $test->status = $status;
        $test->save();

        return redirect()->action('Admin\TestController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $test = Test::findOrFail($id);
        $test->delete();

        return redirect()->action('Admin\TestController@index');
    }
}
