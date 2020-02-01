<?php

namespace App\Http\Controllers;

use App\College;

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
        return request()->all();
    }
}
