<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InstructorSubject extends Model
{
    public function course()
    {
        return $this->belongsTo('App\Course');
    }

    public function section()
    {
        return $this->belongsTo('App\Section');
    }

    public function instructor()
    {
        return $this->belongsTo('App\Instructor');
    }

    public function subject_detail()
    {
        return $this->belongsTo('App\SubjectDetail', 'subject_details_id');
    }
}
