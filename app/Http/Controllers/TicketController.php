<?php

namespace App\Http\Controllers;

use App\Event;
use App\Ticket;

class TicketController extends Controller
{
    private $totalCost = 0;
    private $totalSelected = 0;

    public function __construct()
    {
        $this->middleware('auth')->except('buy', 'createOrder');
    }

    /**
     * @param Event $event
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function showCreate(Event $event)
    {
        $this->authorize('create', [Ticket::class, $event]);

        return view('ticket.create')->with([
            'event' => $event,
        ]);
    }

    /**
     * @param Event $event
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Auth\Access\AuthorizationException
     * @throws \Illuminate\Validation\ValidationException
     */
    public function processCreate(Event $event)
    {
        $this->authorize('create', [Ticket::class, $event]);
        $this->validate(request(), [
            'name' => 'required|max:50',
            'description' => 'required|max:200',
            'quantity' => 'required|numeric',
            'price' => 'required|numeric',
        ]);

        Ticket::create([
            'event_id' => $event->id,
            'name' => request()->get('name'),
            'description' => request()->get('description'),
            'quantity' => request()->get('quantity'),
            'price' => request()->get('price'),
            // TODO: Think of a better implementation in the user interface side and then
            // make this as a feature
            'maximum' => 0,
            'minimum' => 0,
        ]);

        return redirect()
            ->to(route('ticket.list', $event->id))
            ->with('success', 'Ticket has been added to ' . $event->name . ' event');
    }

    public function list(Event $event)
    {
        return view('ticket.list')->with([
            'event' => $event,
            'tickets' => $event->tickets,
        ]);
    }

    public function buy(Event $event)
    {
        return view('ticket.display')->with([
            'event' => $event
        ]);
    }

    public function processBuy(Event $event)
    {

    }

    public function createOrder(Event $event)
    {
        collect(request()->all())->map(function ($selectedTicket) {
            $ticket = Ticket::find($selectedTicket['id']);
            $this->totalCost += $ticket->price * $selectedTicket['quantity'];
            $this->totalSelected += $selectedTicket['quantity'];
        });

        $razorPay = resolve('razorpay');
        $order = $razorPay->order->create([
            'amount' => $this->totalCost * 100,
            'currency' => 'INR',
            'payment_capture' => 1
        ]);

        return [
            'order' => $order['id'],
            'totalCost' => $this->totalCost,
            'totalSelected' => $this->totalSelected
        ];
    }
}
