<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Contact;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contactCollection = Contact::all();
        return view('admin.pages.contact.index', ['contactCollection' => $contactCollection]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contact = Contact::findOrFail($id);

        return view('admin.pages.contact.edit', ['contact' => $contact]);
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
        $contact = Contact::findOrFail($id);

        $firstName = $request->input('first-name');
        $lastName = $request->input('last-name');
        $email = $request->input('email');
        $phoneNumber = $request->input('phone-number');
        $address = $request->input('address');
        $content = $request->input('content');
        $status = $request->input('status');

        $contact->first_name = $firstName;
        $contact->last_name = $lastName;
        $contact->email = $email;
        $contact->phone_number = $phoneNumber;
        $contact->address = $address;
        $contact->content = $content;
        $contact->status = $status;

        $contact->save();

        return redirect()->action('Admin\ContactController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contact = Contact::findOrFail($id);
        $contact->delete();

        return redirect()->action('Admin\PostController@index');
    }
}
