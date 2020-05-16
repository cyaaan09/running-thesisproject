<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubjectDetail extends Model
{
    public function subject()
    {
        return $this->belongsTo('App\Subject');
    }

    public function room_type()
    {
        return $this->belongsTo('App\Type', 'type_id');
    }

    public function courses()
    {
        return $this->hasManyThrough('App\Course', 'App\InstructorSubject');
    }

    public function sections()
    {
        return $this->hasManyThrough('App\Section', 'App\InstructorSubject');
    }

    public function instructors()
    {
        return $this->hasManyThrough('App\Instructor', 'App\InstructorSubject');
    }
}
