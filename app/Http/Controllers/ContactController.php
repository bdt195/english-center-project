<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('frontend.pages.contact.index');
    }

    public function store(Request $request){
        $firstName = $request->input('first-name');
        $lastName = $request->input('last-name');
        $email = $request->input('email');
        $phoneNumber = $request->input('phone-number');
        $address = $request->input('address');
        $content = $request->input('content');

        $contact = new Contact();
        $contact->first_name = $firstName;
        $contact->last_name = $lastName;
        $contact->email = $email;
        $contact->phone_number = $phoneNumber;
        $contact->address = $address;
        $contact->content = $content;

        $contact->save();


        return redirect()->back()->with('success', ['Cảm ơn bạn đã gửi thông tin liên hệ.']);
    }
}
