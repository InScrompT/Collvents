<?php

namespace App\Http\Controllers;

use App\Collvent;
use App\Event;
use Illuminate\Http\Request;

class CollventController extends Controller
{
    public function list(Event $event)
    {
        return view('collvent.list');
    }

    public function showCreate(Event $event)
    {
        if (\Gate::allows('create', [Collvent::class, $event])) {
            return view('collvent.create');
        }

        return abort(403);
    }

    public function processCreate(Event $event)
    {
        if (\Gate::allows('create', [Collvent::class, $event])) {
            return view('collvent.create');
        }

        return request()->all();
    }
}
