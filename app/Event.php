<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Event extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name', 'description', 'user_id', 'start_date', 'end_date',
        'college_id', 'start_time', 'end_time', 'draft'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at', 'start_date', 'end_date'];

    public function organizer()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function attenders()
    {
        return $this->hasMany(Going::class, 'event_id');
    }

    public function tickets()
    {
        return $this->hasMany(Ticket::class);
    }

    public function collvents()
    {
        return $this->hasMany(Collvent::class);
    }

    public function college()
    {
        return $this->belongsTo(College::class);
    }
}
