<?php

namespace App\Http\Controllers;

use App\Profile;
use App\User;

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
            'profile' => Profile::whereUserId(auth()->id())->first()
        ]);
    }

    public function processEdit()
    {
        request()->validate([
            'name' => 'required|max:50',
            'phone' => 'required|integer',
            'birthday' => 'required|date',
        ]);

        $profile = Profile::whereUserId(auth()->id())->first();

        if (is_null($profile)) {
            Profile::create(array_merge([
                'user_id' => auth()->id()
            ], request()->all()));

            return redirect()->route('home')->with('success', 'Your profile is updated successfully');
        }

        $profile->name = request('name');
        $profile->phone = request('phone');
        $profile->birthday = request('birthday');

        $profile->saveOrFail();

        return redirect()->route('home')->with('success', 'Your profile is updated successfully');
    }
}
