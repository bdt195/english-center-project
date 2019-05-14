<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    protected $table = 'test';

    public function category(){
        return $this->belongsTo('App\CourseCategory', 'category_id');
    }
    public function facility(){
        return $this->belongsTo('App\Facility', 'facility_id');
    }

    public function students(){
        return $this->belongsToMany('App\Student', 'student_test', 'test_id', 'student_id');
    }
}
