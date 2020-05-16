<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    public function sections()
    {
        return $this->hasManyThrough('App\Section', 'App\CourseSection');
    }

    public function instructors()
    {
        return $this->hasManyThrough('App\Instructor', 'App\InstructorSubject');
    }

    public function subject_details()
    {
        return $this->hasManyThrough('App\SubjectDetail', 'App\InstructorSubject');
    }
}
