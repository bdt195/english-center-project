<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use App\Student;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $studentCollection = Student::all();
        return view('admin.pages.student.index', ['studentCollection' => $studentCollection]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.student.create');
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
        $dateOfBirth = $request->input('date-of-birth');
        $address = $request->input('address');
        $password = $request->input('password');

        $student = new Student();
        $student->first_name = $firstName;
        $student->last_name = $lastName;
        $student->email = $email;
        $student->phone_number = $phoneNumber;
        $student->dateOfBirth = $dateOfBirth;
        $student->address = $address;
        $student->password = Hash::make($password);
        $student->save();

        return redirect()->action('Admin\StudentController@index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = Student::findOrFail($id);

        return view('admin.pages.student.edit', ['student' => $student]);
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
        $student = Student::findOrFail($id);

        $firstName = $request->input('first-name');
        $lastName = $request->input('last-name');
        $email = $request->input('email');
        $phoneNumber = $request->input('phone-number');
        $dateOfBirth = $request->input('date-of-birth');
        $address = $request->input('address');
        $password = $request->input('password');

        $student->first_name = $firstName;
        $student->last_name = $lastName;
        $student->email = $email;
        $student->phone_number = $phoneNumber;
        $student->date_of_birth = $dateOfBirth;
        $student->address = $address;

        if($password != ''){
            $student->password = Hash::make($password);
        }

        $student->save();

        return redirect()->action('Admin\StudentController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = Student::findOrFail($id);
        $student->delete();

        return redirect()->action('Admin\PostController@index');
    }
}
