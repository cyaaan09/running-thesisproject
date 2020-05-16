<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    public function subjectDetails()
    {
        return $this->hasMany('App\SubjectDetail');
    }

    public function rooms()
    {
        return $this->hasMany('App\Room');
    }
}
