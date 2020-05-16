<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Instructor extends Model
{
    public function subject_details()
    {
        return $this->hasManyThrough('App\SubjectDetail', 'App\InstructorSubject');
    }

    public function sections()
    {
        return $this->hasManyThrough('App\Section', 'App\InstructorSubject');
    }

    public function courses()
    {
        return $this->hasManyThrough('App\Course', 'App\InstructorSubject');
    }

}
