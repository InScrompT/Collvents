<?php

namespace App\Http\Controllers;

use App\Profile;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show()
    {
        return view('profile.show', [
            'profile' => Profile::whereUserId(auth()->id())->firstOrFail()
        ]);
    }

    public function edit()
    {
        return view('profile.edit', [
            'profile' => Profile::whereUserId(auth()->id())->firstOrFail()
        ]);
    }

    public function processEdit()
    {
        request()->validate([
            'name' => 'required|max:50',
            'phone' => 'required|integer',
            'birthday' => 'required|date',
        ]);

        Profile::updateOrCreate(['user_id' => auth()->id()], [
            'name' => request('name'),
            'phone' => request('phone'),
            'birthday' => request('birthday')
        ]);

        return redirect()->route('home')->with('success', 'Your profile is updated successfully');
    }
}
