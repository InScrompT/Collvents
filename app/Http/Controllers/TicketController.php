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

        return view('ticket.create');
    }

    public function processCreate()
    {
        return \request()->all();
    }
}
