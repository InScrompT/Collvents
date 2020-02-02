<?php

namespace App\Http\Controllers;


use App\College;

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
        request()->validate([
            'name' => 'required|max:150|min:15',
            'state' => 'required',
            'city' => 'required'
        ]);

        College::create(request()->all());

        return redirect()
            ->to(route('home'))
            ->with('success', 'The college has been added to ' . env('APP_NAME') . ' successfully');
    }
}
