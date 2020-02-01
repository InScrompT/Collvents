<?php

namespace App\Http\Controllers;


class CollegeController extends Controller
{
    /**
     * Shows form to allow people create college in-case they don't exist
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function create()
    {
        //TODO: make a view
        return view('');
    }

    public function processCreate()
    {
        //
    }
}
