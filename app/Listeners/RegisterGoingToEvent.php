<?php

namespace App\Listeners;

use App\Events\TransactionSuccess;
use App\Going;

class RegisterGoingToEvent
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  TransactionSuccess  $event
     * @return void
     */
    public function handle(TransactionSuccess $event)
    {
        Going::create([
            'event_id' => $event->transaction->ticket->event->id,
            'user_id' => $event->transaction->owner
        ]);
    }
}
