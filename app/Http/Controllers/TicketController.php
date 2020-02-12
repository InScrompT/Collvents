<?php

namespace App\Http\Controllers;

use App\Event;
use App\Ticket;

class TicketController extends Controller
{
    public function showCreate(Event $event)
    {
        if (! \Auth::user()->can('create', [Ticket::class, $event])) {
            abort(403);
        }

        return view('ticket.create')->with([
            'event_id' => $event->id,
            'event_name' => $event->name,
        ]);
    }

    public function processCreate()
    {
        return \request()->all();
    }
}
