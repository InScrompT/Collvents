<?php

namespace App\Http\Controllers;

use App\College;
use App\Event;

class EventController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('all');
    }

    public function all()
    {
        $cityEvents = College::whereCity('chennai')->limit(4)->get();
        $statEvents = College::whereState('tamilnadu')->limit(4)->get();
        $aoiEvents = College::where('city', '!=', 'chennai')
            ->where('state', '!=', 'tamil nadu')
            ->limit(4)->get();

        return view('welcome')->with([
            'city' => $cityEvents,
            'state' => $statEvents,
            'india' => $aoiEvents
        ]);
    }

    public function showCreate()
    {
        return view('events.create');
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
            'college_id'    => 0, // TODO: make it working, ASAP
            'start_time'    => request()->get('start_time'),
            'start_date'    => request()->get('start_date'),
            'end_time'      => request()->get('end_time'),
            'end_date'      => request()->get('end_date'),
            'draft'         => true
        ]);

        return redirect()->to(
            route('collvent.create', $event->id)
        );
    }
}
