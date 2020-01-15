<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Notifications\LoggedIn;
use App\Notifications\LoginRequested;
use App\Notifications\SignedUp;
use App\Notifications\SignupRequested;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;

class PasswordlessAuth extends Controller
{
    protected $redirectTo;

    public function __construct()
    {
        $this->redirectTo = route('home');

        $this->middleware('signed')->except(['sendAuthToken', 'showLoginPage', 'showEmailSent', 'logout']);
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('index');
    }

    public function showLoginPage()
    {
        return view('auth.login');
    }

    public function showEmailSent()
    {
        return view('auth.email-sent');
    }

    public function sendAuthToken(Request $request)
    {
        $user = User::whereEmail($request->get('email'))->get();

        if ($user->count()) {
            Notification::send($user, new LoginRequested());
        } else {
            Notification::route('mail', $request->get('email'))
                ->notify(new SignupRequested($request->get('email')));
        }

        return redirect()->route(
            'auth.process.email', [
                'email' => encrypt($request->get('email'))
            ]
        );
    }

    public function processLogin($id)
    {
        Auth::loginUsingId($id)->notify(new LoggedIn());

        return redirect()->to(
            $this->redirectTo
        );
    }

    public function processRegistration($email)
    {
        $decryptedEmail = decrypt($email);

        $user = User::create([
            'email' => $decryptedEmail,
            'email_verified_at' => now()->timestamp
        ]);

        if ($user->save()) {
            Auth::login($user);
            $user->notify(new SignedUp());

            return redirect()->to(
                $this->redirectTo
            );
        }
    }
}
