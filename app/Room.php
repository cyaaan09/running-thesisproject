<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    public function room_type()
    {
        return $this->belongsTo('App\Type', 'type_id');
    }

    public function distances()
    {
        return $this->hasMany('App\Distance', 'from_room_id');
    }
}
