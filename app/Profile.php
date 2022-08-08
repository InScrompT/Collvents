<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
        'user_id', 'name', 'college', 'degree', 'course', 'phone', 'birthday'
    ];

    protected $dates = [
        'birthday'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
