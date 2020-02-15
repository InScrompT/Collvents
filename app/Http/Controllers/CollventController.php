<?php

namespace App\Http\Controllers;

use App\Collvent;
use App\Event;
use Illuminate\Http\Request;

class CollventController extends Controller
{
    /**
     * @param Event $event
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function list(Event $event)
    {
        return view('collvent.list')->with([
            'event' => $event,
            'collvents' => $event->collvents
        ]);
    }

    /**
     * @param Event $event
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function showCreate(Event $event)
    {
        $this->authorize('create', [Collvent::class, $event]);

        return view('collvent.create')->with([
            'event' => $event
        ]);
    }

    /**
     * @param Event $event
     * @return array
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function processCreate(Event $event)
    {
        $this->authorize('create', [Collvent::class, $event]);

        $this->validate(request(), [
            'name' => 'required|max:100',
            'description' => 'required|max:400'
        ]);

        Collvent::create([
            'event_id' => $event->id,
            'name' => request()->get('name'),
            'description' => request()->get('description'),
        ]);

        return redirect()
            ->to(route('collvent.list', $event->id))
            ->with('success', 'The Sub-Event has been added to ' . $event->name . ' successfully');
    }
}
