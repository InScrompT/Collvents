<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public function event()
    {
        $this->belongsTo(Event::class);
    }

    public function user()
    {
        $this->belongsTo(User::class);
    }
}
