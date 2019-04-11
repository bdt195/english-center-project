<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
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
        return view('welcome', ['studentCollection' => $studentCollection]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $firstName = $request->input('firstname');
        $lastName = $request->input('lastname');
        $email = $request->input('email');
        $phoneNumber = $request->input('phone-number');
        $address = $request->input('address');

        $student = new Student();
        $student->firstname = $firstName;
        $student->lastname = $lastName;
        $student->email = $email;
        $student->phoneNumber = $phoneNumber;
        $student->address = $address;
        $student->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $student = Student::findOrFail($id);
        return view('welcome', ['student' => $student]);
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
        $student = Student::findOrFail($id);

        $firstName = $request->input('firstname');
        $lastName = $request->input('lastname');
        $email = $request->input('email');
        $phoneNumber = $request->input('phone-number');
        $address = $request->input('address');

        $student->firstname = $firstName;
        $student->lastname = $lastName;
        $student->email = $email;
        $student->phoneNumber = $phoneNumber;
        $student->address = $address;

        $student->save();
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
    }
}
