<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CourseSection extends Model
{
    public function course()
    {
        return $this->belongsTo('App\Course');
    }

    public function section()
    {
        return $this->belongsTo('App\Section');
    }
}
