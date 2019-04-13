<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'category';

    /**
     * Get the parent category.
     */
    public function parentCategory()
    {
        return $this->belongsTo('App\Category', 'parent_id');
    }
}
