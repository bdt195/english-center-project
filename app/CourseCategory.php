<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CourseCategory extends Model
{
    protected $table = 'course_category';

    protected function courses(){
        return $this->hasMany('App\Course');
    }
}
