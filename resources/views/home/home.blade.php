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

                @if (session('success'))
                    <div class="notification is-primary">
                        <p class="subtitle">{{ session('success') }}</p>
                    </div>
                @endif

                @if (session('error'))
                    <div class="notification is-danger">
                        <p class="subtitle">{{ session('error') }}</p>
                    </div>
                @endif

                <div class="notification">
                    <p class="title is-4 has-text-centered">Want to jump start?</p>
                    <div class="columns has-margin-2">
                        <div class="column is-6 center">
                            <a href="{{ route('event.create') }}" class="button is-primary is-fullwidth">Create An Event</a>
                        </div>
                        <div class="column is-6">
                            <a href="{{ route('index') }}" class="button is-primary is-fullwidth">Join An Event</a>
                        </div>
                    </div>
                </div>

                <div class="tabs">
                    <ul>
                        <li class="is-active"><a href="{{ route('home') }}">Your Events</a></li>
                        <li><a href="{{ route('home.going') }}">Going</a></li>
                        <li><a href="{{ route('home.transaction') }}">Transactions</a></li>
                    </ul>
                </div>
                <section class="section">
                    <div class="columns is-multiline">
                        @if(isset($events))
                            @foreach($events as $event)
                                <div class="column is-3">
                                    <div class="card">
                                        <div class="card-image">
                                            <figure class="image is-5by3">
                                                <img src="https://via.placeholder.com/1080" alt="Placeholder image">
                                            </figure>
                                        </div>
                                        <div class="card-content">
                                            <p class="is-size-7 has-text-primary is-uppercase">jan 23, 12:20 am</p>
                                            <p class="has-text-grey-dark is-uppercase event-title">{{ $event->name }}</p>
                                            <a href="#" class="is-size-7 has-text-grey is-uppercase">
                                                kcg college of technology
                                            </a>
                                            <br/>
                                            <a href="#" class="is-size-7 has-text-grey is-uppercase">Chennai</a>,
                                            <a href="#" class="is-size-7 has-text-grey is-uppercase">Tamilnadu</a>
                                        </div>
                                        <div class="card-footer">
                                            <div class="card-footer-item">
                                                <a href="" class="button is-danger is-fullwidth is-uppercase">Edit</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </section>
            </div>
        </div>
    </section>
@endsection
