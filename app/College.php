<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class College extends Model
{
    protected $fillable = [
        'name', 'city', 'state'
    ];

    public function events()
    {
        return $this->hasMany(Event::class);
    }
}
