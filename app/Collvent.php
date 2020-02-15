<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Collvent
 *
 * @property-read \App\Event $event
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Collvent newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Collvent newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Collvent query()
 * @mixin \Eloquent
 * @property int $id
 * @property int $event_id
 * @property string $name
 * @property string $description
 * @property string|null $banner_img
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Collvent whereBannerImg($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Collvent whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Collvent whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Collvent whereEventId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Collvent whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Collvent whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Collvent whereUpdatedAt($value)
 */
class Collvent extends Model
{
    protected $fillable = ['name', 'description', 'event_id'];

    public function event()
    {
        return $this->belongsTo(Event::class);
    }
}
