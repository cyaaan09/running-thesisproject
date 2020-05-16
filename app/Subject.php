<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    public function instructors()
    {
        return $this->hasManyThrough('App\Instructor', 'App\InstructorSubject');
    }
}
