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
        return view('college.create');
    }

    public function processCreate()
    {
        //
    }
}
