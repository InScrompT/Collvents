<?php

namespace App\Listeners;

use App\Events\TransactionSuccess;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendTransactionSuccessEmail
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
        $event->transaction->owner->notify(
            new \App\Notifications\TransactionSuccess($event->transaction)
        );
    }
}
