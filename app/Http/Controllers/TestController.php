<?php

namespace App\Http\Controllers;

use App\Test;
use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    public function index()
    {
        $schedule = [
            1 => 'Buối sáng',
            2 => 'Buổi chiều',
            3 => 'Buối tối',
        ];

        $tests = Test::where([
            ['status', '=', '1'],
        ])->get();

        foreach($tests as $test){
            $test->schedule = $schedule[$test->schedule];
        }

        return view('frontend.pages.test.index', ['tests' => $tests]);
    }

    public function register(Request $request)
    {
        $testId = $request->input('test-id');
        $student = null;
        if(Auth::check()){
            $student = Auth::user();
            $isRegistered = Test::findOrFail($testId)->students->where('id', $student->id)->count() > 0 ? true : false;
            if($isRegistered){
                $message = 'Bạn đã đăng ký buổi thi này.';
                return redirect()->back()->with('errors', [$message]);
            }
        }
        else {
            $firstName = $request->input('first-name');
            $lastName = $request->input('last-name');
            $email = $request->input('email');
            $phone = $request->input('phone');
            $dateOfBirth = $request->input('date-of-birth');
            $address = $request->input('address');

            $isExists = Student::where('email', $email)->count() > 0 ? true: false;
            if($isExists){
                $message = 'Email này đã được đăng ký với một tài khoản khác, vui lòng kiểm tra lại.';
                return redirect()->back()->with('errors', [$message]);
            }

            $newStudent = new Student();
            $newStudent->first_name = $firstName;
            $newStudent->last_name = $lastName;
            $newStudent->email = $email;
            $newStudent->phone_number =$phone;
            $newStudent->date_of_birth = $dateOfBirth;
            $newStudent->address = $address;
            $newStudent->save();

            $student = $newStudent;
        }

        DB::table('student_test')->insert(
            [
                'student_id' => $student->id,
                'test_id' => $testId,
                "created_at" =>  \Carbon\Carbon::now(),
                "updated_at" => \Carbon\Carbon::now(),
            ]
        );

        $message = 'Cảm ơn bạn đã đăng ký buổi thi thử';
        return redirect('/')->with('success', [$message]);
    }
}
