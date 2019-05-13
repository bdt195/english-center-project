<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recruitment extends Model
{
    protected $table = 'recruitment';

    public function cv(){
        return $this->hasMany('App\CV', 'recruitment_id');
    }

    public function facility(){
        return $this->belongsTo('App\Facility', 'facility_id');
    }
}
