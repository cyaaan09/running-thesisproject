<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    public function course()
    {
        return $this->belongsTo('App\Course');
    }

    public function section()
    {
        return $this->belongsTo('App\Section');
    }

    public function subject()
    {
        return $this->belongsTo('App\Subject');
    }

    public function room()
    {
        return $this->belongsTo('App\Room', 'room_id');
    }

    public function room_type()
    {
        return $this->belongsTo('App\Type', 'type_id');
    }

    public function instructor()
    {
        return $this->belongsTo('App\Instructor');
    }

    public function meeting_time()
    {
        return $this->belongsTo('App\MeetingTime', 'meeting_time_id');
    }
}
