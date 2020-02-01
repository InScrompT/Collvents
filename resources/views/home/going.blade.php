@extends('layouts.app')

@section('content')
    <section class="hero is-info is-medium">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="columns is-centered">
                    <div class="column is-8">
                        <h1 class="title">
                            Welcome to {{ env('APP_NAME') }}, {{ Auth::user()->name ?? Auth::user()->email  }}!
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="container">
            <div class="has-margin-2">
                <div class="notification">
                    <p class="title is-4 has-text-centered">Want to jump start?</p>
                    <div class="columns has-margin-2">
                        <div class="column is-6 center">
                            <button class="button is-primary is-fullwidth">Create An Event</button>
                        </div>
                        <div class="column is-6">
                            <button class="button is-primary is-fullwidth">Join An Event</button>
                        </div>
                    </div>
                </div>
                <div class="tabs">
                    <ul>
                        <li><a href="{{ route('home') }}">Your Events</a></li>
                        <li class="is-active"><a href="{{ route('home.going') }}">Going</a></li>
                        <li><a href="{{ route('home.transaction') }}">Transactions</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection
