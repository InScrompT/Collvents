<?php

namespace App\Http\Controllers;

use App\Event;
use App\Ticket;
use Composer\Package\Link;

class TicketController extends Controller
{
    /**
     * @param Event $event
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
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

    /**
     * @param Event $event
     * @return \Illuminate\Http\RedirectResponse
     */
    public function processCreate(Event $event)
    {
        if (! \Auth::user()->can('create', [Ticket::class, $event])) {
            abort(403);
        }

        for ($i = 0; $i < count(request()->get('name')); $i++) {
            Ticket::create([
                'event_id' => $event->id,
                'name' => request()->get('name')[$i],
                'description' => request()->get('description')[$i],
                'quantity' => request()->get('quantity')[$i],
                'price' => request()->get('price')[$i],
                'maximum' => request()->get('maximum')[$i],
                'minimum' => request()->get('minimum')[$i]
            ]);
        }

        return redirect()->to(route('home'))->with('success', 'Your event ' . $event->name . ' has been successfully created');
    }
}
