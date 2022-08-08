<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $fillable = ['event_id', 'name', 'description', 'quantity', 'price', 'minimum', 'maximum'];

    protected $casts = [
        'price' => 'float',
        'quantity' => 'integer',
        'maximum' => 'integer',
        'minimum' => 'integer',
    ];

    public function event()
    {
        return $this->belongsTo(Event::class);
    }

    public function buyers()
    {
        return $this->hasMany(Transaction::class);
    }
}
