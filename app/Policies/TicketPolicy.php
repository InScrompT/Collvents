<?php

namespace App\Policies;

use App\Event;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class TicketPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function create(User $user, Event $event)
    {
        return $user->id === $event->organizer->id;
    }

    public function update(User $user, Event $event)
    {
        return $user->id === $event->organizer->id;
    }
}
