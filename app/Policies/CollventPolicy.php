<?php

namespace App\Policies;

use App\Collvent;
use App\Event;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class CollventPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any collvents.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the collvent.
     *
     * @param  \App\User  $user
     * @param  \App\Collvent  $collvent
     * @return mixed
     */
    public function view(User $user, Collvent $collvent)
    {
        //
    }

    /**
     * Determine whether the user can create collvents.
     *
     * @param \App\User $user
     * @param Event $event
     * @return mixed
     */
    public function create(User $user, Event $event)
    {
        return $user->id === $event->organizer->id;
    }

    /**
     * Determine whether the user can update the collvent.
     *
     * @param  \App\User  $user
     * @param  \App\Collvent  $collvent
     * @return mixed
     */
    public function update(User $user, Collvent $collvent)
    {
        //
    }

    /**
     * Determine whether the user can delete the collvent.
     *
     * @param  \App\User  $user
     * @param  \App\Collvent  $collvent
     * @return mixed
     */
    public function delete(User $user, Collvent $collvent)
    {
        //
    }

    /**
     * Determine whether the user can restore the collvent.
     *
     * @param  \App\User  $user
     * @param  \App\Collvent  $collvent
     * @return mixed
     */
    public function restore(User $user, Collvent $collvent)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the collvent.
     *
     * @param  \App\User  $user
     * @param  \App\Collvent  $collvent
     * @return mixed
     */
    public function forceDelete(User $user, Collvent $collvent)
    {
        //
    }
}
