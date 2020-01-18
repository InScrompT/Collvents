<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class College extends Model
{
    public function type()
    {
        return $this->belongsTo(Type::class);
    }

    public function events()
    {
        return $this->hasMany(Event::class);
    }
}
