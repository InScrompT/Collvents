<?php

namespace App\Http\Controllers;

use App\Event;
use App\Going;
use App\Transaction;
use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $eventsOwned = Event::whereUserId(auth()->id());

        return view('home.home')->with([
            'events' => $eventsOwned,
        ]);
    }

    public function going()
    {
        $eventsGoing = Going::whereUserId(auth()->id());

        return view('home.going')->with([
            'going' => $eventsGoing,
        ]);
    }

    public function transaction()
    {
        return view('home.transaction');
    }
}
