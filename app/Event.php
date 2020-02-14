<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Event
 *
 * @property int $id
 * @property int $user_id
 * @property string $name
 * @property string $start_time
 * @property string|null $end_time
 * @property int $is_one_day
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Going[] $attenders
 * @property-read int|null $attenders_count
 * @property-read \App\User $organizer
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Event newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Event newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Event query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Event whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Event whereEndTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Event whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Event whereIsOneDay($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Event whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Event whereStartTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Event whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Event whereUserId($value)
 * @mixin \Eloquent
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Ticket[] $tickets
 * @property-read int|null $tickets_count
 * @property string $description
 * @property int $pincode
 * @property int $college_id
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Event whereCollegeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Event whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Event wherePincode($value)
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Role[] $roles
 * @property-read int|null $roles_count
 */
class Event extends Model
{
    protected $fillable = [
        'name', 'description', 'user_id', 'start_date', 'end_date',
        'college_id', 'start_time', 'end_time', 'draft'
    ];

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
}
