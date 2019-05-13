<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Recruitment;
use App\CV;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $authUser = Auth::user();
        return view('frontend.pages.home.index', ['authUser' => $authUser]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function recruitment()
    {
        $recruitmentCollection = Recruitment::all();
        return view('frontend.pages.recruitment.index', ['recruitmentCollection' => $recruitmentCollection]);
    }

    public function viewRecruitment($id)
    {
        $recruitment = Recruitment::findOrFail($id);
        return view('frontend.pages.recruitment.description', ['recruitment' => $recruitment]);
    }

    public function postCV(Request $request, $id)
    {
        $recruitment = Recruitment::findOrFail($id);

        //Kiểm tra file
        if ($request->hasFile('cv')) {
            $file = $request->cv;
            $savedFile = $file->move('upload/cv', $file->getClientOriginalName());

            $cv = new CV();
            $cv->recruitment_id = $id;
            $cv->file_name = $savedFile->getFilename();
            $cv->file_path = $savedFile->getPathname();
            $cv->file_type = $savedFile->getMimeType();
            $cv->save();
        }

        return redirect()->action('HomeController@index');
    }
}
