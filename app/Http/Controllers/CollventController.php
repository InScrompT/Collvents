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
        return view('collvent.list');
    }

    /**
     * @param Event $event
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function showCreate(Event $event)
    {
        $this->authorize('create', [Collvent::class, $event]);

        return view('collvent.create');
    }

    /**
     * @param Event $event
     * @return array
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function processCreate(Event $event)
    {
        $this->authorize('create', [Collvent::class, $event]);

        return request()->all();
    }
}
