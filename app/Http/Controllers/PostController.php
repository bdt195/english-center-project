<?php

namespace App\Http\Controllers;

use App\CourseCategory;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Course;
use Illuminate\Support\Facades\Input;

class PostController extends Controller
{
    public function show($id)
    {
        $post = Post::findOrFail($id);
        return view(
            'frontend.pages.post.detail',
            [
                'post' => $post,
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
