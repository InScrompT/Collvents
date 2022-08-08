<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Collvent extends Model
{
    protected $fillable = ['name', 'description', 'event_id'];

    public function event()
    {
        return $this->belongsTo(Event::class);
    }
}
