<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Distance extends Model
{
    public function from_room()
    {
        return $this->belongsTo('App\Room', 'from_room_id');
    }

    public function to_room()
    {
        return $this->belongsTo('App\Room', 'to_room_id');
    }
}
