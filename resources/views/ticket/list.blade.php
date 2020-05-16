@extends('layouts.app')

@section('content')
    <section class="hero is-info is-medium">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="columns is-centered">
                    <div class="column is-8">
                        <h1 class="title">
                            List of tickets for {{ $event->name }} event
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="container">
            @if (session('success'))
                <div class="notification is-success">
                    <p class="subtitle">{{ session('success') }}</p>
                </div>
            @endif

            @if(count($tickets))
                @can('create', [App\Ticket::class, $event])
                    <div class="notification">
                        <div class="columns is-vcentered">
                            <div class="column is-8">
                                <span class="title is-4 has-text-grey-light">Wanna save the event and publish?</span>
                            </div>
                            <div class="column is-4">
                                <a href="{{ route('event.fake.save', $event->id) }}" class="button is-fullwidth is-info">Save Event</a>
                            </div>
                        </div>
                    </div>
                @endcan
            @endif

            <div class="columns is-multiline">
                @if(count($tickets))
                    @include('ticket.layouts.ticket')
                @else
                    <div class="column is-12">
                        <div class="notification has-text-centered">
                            <span class="title is-4 has-text-grey-light">No tickets added to this event yet.</span>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </section>
    @can('create', [App\Ticket::class, $event])
        <section>
            <div class="container">
                <div class="columns">
                    <div class="column is-12">
                        <a class="button is-primary is-fullwidth is-uppercase" href="{{ route('ticket.create', [$event->id]) }}">Add ticket</a>
                    </div>
                </div>
            </div>
        </section>
    @endcan
@endsection
