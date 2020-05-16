<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RoomSchedule extends Model
{
    public function room()
    {
        return $this->belongsTo('App\Room');
    }

    public function schedule()
    {
        return $this->belongsTo('App\Schedule');
    }
}
