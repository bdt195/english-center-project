<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function profile()
    {
        return view('frontend.pages.user.profile');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $firstName = $request->input('first-name');
        $lastName = $request->input('last-name');
        $email = $request->input('email');
        $dateOfBirth = $request->input('date-of-birth');
        $address = $request->input('address');
        $phoneNumber = $request->input('phone-number');

        $user = Auth::user();

        $user->first_name = $firstName;
        $user->last_name = $lastName;
        $user->email = $email;
        $user->date_of_birth = $dateOfBirth;
        $user->address = $address;
        $user->phone_number = $phoneNumber;

        if ($request->hasFile('avatar')) {
            $file = $request->avatar;
            $savedFile = $file->move('upload/user/image', time() . $file->getClientOriginalName());
            $user->avatar = $savedFile->getPathname();
        }

        $user->save();

        return redirect()->back()->with('success', ['Cập nhật thông tin thành công.']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updatePassword(Request $request)
    {
        $password = $request->input('password');
        $newPassword = $request->input('new-password');
        $newPasswordRetype = $request->input('new-password-retype');

        $user = Auth::user();

        if(!Hash::check($password, $user->password)){
            return redirect()->back()
                ->with('errors', ['Mật khẩu không đúng.'])
                ->with('flag', 'password');
        }

        if($newPassword != $newPasswordRetype) {
            return redirect()->back()
                ->with('errors', ['Nhập lại mật khẩu không đúng.'])
                ->with('flag', 'password');
        }

        $user->password = Hash::make($newPassword);

        $user->save();

        return redirect()->back()->with('success', ['Đổi mật khẩu thành công.']);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
