<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Ticket
 *
 * @property int $id
 * @property int $event_id
 * @property string $name
 * @property string $description
 * @property int $quantity
 * @property int|null $available
 * @property float $price
 * @property int $free
 * @property int $multiple_ticket
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Transaction[] $buyers
 * @property-read int|null $buyers_count
 * @property-read \App\Event $event
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Ticket newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Ticket newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Ticket query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Ticket whereAvailable($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Ticket whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Ticket whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Ticket whereEventId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Ticket whereFree($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Ticket whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Ticket whereMultipleTicket($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Ticket whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Ticket wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Ticket whereQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Ticket whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Ticket extends Model
{
    protected $fillable = ['event_id', 'name', 'description', 'quantity', 'price', 'minimum', 'maximum'];

    public function event()
    {
        return $this->belongsTo(Event::class);
    }

    public function buyers()
    {
        return $this->hasMany(Transaction::class);
    }
}
