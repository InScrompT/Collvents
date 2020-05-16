@extends('layouts.app')

@section('content')
    <section class="hero is-info is-medium">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="columns is-centered">
                    <div class="column is-8">
                        <h1 class="title">
                            List of sub-events for {{ $event->name }} event
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

            @can('create', [App\Ticket::class, $event])
                <div class="notification">
                    <div class="columns is-vcentered">
                        <div class="column is-8">
                            <span class="title is-4 has-text-grey-light">Want to add tickets now?</span>
                        </div>
                        <div class="column is-4">
                            <a href="{{ route('ticket.list', $event->id) }}" class="button is-fullwidth is-info">Add Tickets</a>
                        </div>
                    </div>
                </div>
            @endcan

            <div class="columns is-multiline">
                @if(count($collvents))
                    @include('collvent.layouts.collvent')
                @else
                    <div class="column is-12">
                        <div class="notification has-text-centered">
                            <span class="title is-4 has-text-grey-light">No sub-events added to this event yet.</span>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </section>
    @can('create', [App\Collvent::class, $event])
        <section>
            <div class="container">
                <div class="columns">
                    <div class="column is-12">
                        <a class="button is-primary is-fullwidth is-uppercase" href="{{ route('collvent.create', [$event->id]) }}">Add Sub-event</a>
                    </div>
                </div>
            </div>
        </section>
    @endcan
@endsection
