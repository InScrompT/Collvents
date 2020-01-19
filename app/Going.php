<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Going
 *
 * @property int $id
 * @property int $event_id
 * @property int $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Event $event
 * @property-read \App\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Going newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Going newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Going query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Going whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Going whereEventId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Going whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Going whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Going whereUserId($value)
 * @mixin \Eloquent
 */
class Going extends Model
{
    protected $fillable = [
        'event_id', 'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function event()
    {
        return $this->belongsTo(Event::class);
    }
}
