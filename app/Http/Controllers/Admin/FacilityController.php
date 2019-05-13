<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Facility;

class FacilityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $facilityCollection = Facility::all();
        return view('admin.pages.facility.index', ['facilityCollection' => $facilityCollection]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.facility.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $name = $request->input('name');
        $address = $request->input('address');
        $phoneNumber = $request->input('phone-number');

        $facility = new Facility();
        $facility->name = $name;
        $facility->address = $address;
        $facility->phone_number = $phoneNumber;
        $facility->save();

        return redirect()->action('Admin\FacilityController@index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $facility = Facility::findOrFail($id);

        return view('admin.pages.facility.edit', ['facility' => $facility]);
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
        $facility = Facility::findOrFail($id);

        $name = $request->input('name');
        $address = $request->input('address');
        $phoneNumber = $request->input('phone-number');

        $facility->name = $name;
        $facility->address = $address;
        $facility->phone_number = $phoneNumber;
        $facility->save();

        return redirect()->action('Admin\FacilityController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $facility = Facility::findOrFail($id);
        $facility->delete();

        return redirect()->action('Admin\FacilityController@index');
    }
}
