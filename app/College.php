<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\College
 *
 * @property int $id
 * @property int $type_id
 * @property string $name
 * @property string $city
 * @property string $state
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Event[] $events
 * @property-read int|null $events_count
 * @property-read \App\Type $type
 * @method static \Illuminate\Database\Eloquent\Builder|\App\College newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\College newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\College query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\College whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\College whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\College whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\College whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\College whereState($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\College whereTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\College whereUpdatedAt($value)
 * @mixin \Eloquent
 */
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
