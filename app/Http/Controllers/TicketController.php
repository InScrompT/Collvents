<?php

namespace App\Http\Controllers;

use App\Event;
use App\Ticket;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function showCreate(Event $event)
    {
        if (! \Auth::user()->can('create', [Ticket::class, $event])) {
            abort(403);
        }

        return ['awesome'];
    }

    public function processCreate()
    {
        return \request()->all();
    }
}
