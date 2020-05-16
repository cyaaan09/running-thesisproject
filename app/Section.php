<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    public function courses()
    {
        return $this->hasManyThrough('App\Course', 'App\CourseSection');
    }

    public function subject_details()
    {
        return $this->hasManyThrough('App\SubjectDetail', 'App\InstructorSubject');
    }

    public function instructors()
    {
        return $this->hasManyThrough('App\Instructor', 'App\InstructorSubject');
    }
}
