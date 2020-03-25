<?php

namespace App\Http\Controllers;

use App\Event;
use App\Ticket;
use Carbon\Carbon;

class EventController extends Controller
{
    private $totalRevenue = 0;
    private $totalTicketsSold = 0;
    private $totalAttendeeAllowed = 0;

    public function __construct()
    {
        $this->middleware('auth')->except(['all', 'display']);
    }

    public function all()
    {
        $events = Event::limit(16)->get();

        return view('welcome')->with('events', $events);
    }

    public function showCreate()
    {
        return view('events.create');
    }

    public function display(Event $event)
    {
        $event->tickets->each(function (Ticket $ticket) {
            $this->totalAttendeeAllowed += $ticket->quantity;
        });

        return view('events.display')->with([
            'event' => $event,
            'onwards' => $event->tickets->sortBy('price')->first(),
            'totalAttendee' => $this->totalAttendeeAllowed,
        ]);
    }

    public function processCreate()
    {
        request()->validate([
            'name'          => 'required',
            'college'       => 'required',
            'description'   => 'required',
            'start_time'    => 'required',
            'start_date'    => 'required',
            'end_time'      => 'required',
            'end_date'      => 'required',
        ]);

        $event = Event::create([
            'name'          => request()->get('name'),
            'description'   => request()->get('description'),
            'user_id'       => auth()->id(),
            'college_id'    => 1, // TODO: make it working, ASAP
            'start_date'    => request()->get('start_date'),
            'start_time'    => Carbon::parse(request()->get('start_time'))->toTimeString(),
            'end_time'      => Carbon::parse(request()->get('end_time'))->toTimeString(),
            'end_date'      => request()->get('end_date'),
            'draft'         => true,
        ]);

        return redirect()->to(
            route('collvent.create', $event->id)
        );
    }

    public function fakeSave(Event $event)
    {
        $event->draft = false;
        $event->saveOrFail();

        return redirect()
            ->to('home')
            ->with('success', 'The event ' . $event->name . ' has been saved successfully');
    }

    public function describe(Event $event)
    {
        $this->authorize('describe', $event);

        Ticket::whereEventId($event->id)->get()
            ->reject(function (Ticket $ticket) {
                return $ticket->buyers->count() === 0;
            })
            ->map(function (Ticket $ticket) {
                $buyerCount = $ticket->buyers->count();

                $this->totalRevenue += $ticket->price * $buyerCount;
                $this->totalTicketsSold += $buyerCount;
            });

        return view('events.describe')->with([
            'event' => $event,
            'tickets' => $event->tickets,
            'collvents' => $event->collvents,
            'total_revenue' => $this->totalRevenue,
            'tickets_sold' => $this->totalTicketsSold,
        ]);
    }

    public function delete(Event $event)
    {
        $this->authorize('delete', $event);
        $event->delete();

        return redirect()->to(route('home'))->with(
            'success', 'The event ' . $event->name . ' has been deleted'
        );
    }

    public function drafter(Event $event)
    {
        $this->authorize('draft', $event);

        $event->draft = !$event->draft;
        $event->saveOrFail();

        if ($event->draft) {
            return redirect()->to(route('home'))->with(
                'success', 'The event ' . $event->name . ' has been drafted'
            );
        }

        return redirect()->to(route('home'))->with(
            'success', 'The event ' . $event->name . ' has been un-drafted'
        );
    }
}
