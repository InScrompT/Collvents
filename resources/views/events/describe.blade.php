@extends('layouts.app')

@section('content')
    <section class="hero is-info is-medium">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="columns is-centered">
                    <div class="column is-8">
                        <h1 class="title">
                            Description of the {{ $event->name }}
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column is-4">
                    <div class="card has-background-danger">
                        <div class="card-content">
                            <span class="title is-4 has-text-white">Attenders: </span>
                            <span class="subtitle is-4 has-text-white">
                                {{ $event->attenders->count() }}
                            </span>
                        </div>
                    </div>
                </div>
                <div class="column is-4">
                    <div class="card has-background-success">
                        <div class="card-content">
                            <span class="title is-4">Tickets Sold: </span>
                            <span class="subtitle is-4">
                                {{ $tickets_sold }}
                            </span>
                        </div>
                    </div>
                </div>
                <div class="column is-4">
                    <div class="card has-background-warning">
                        <div class="card-content">
                            <span class="title is-4">Revenue: </span>
                            <span class="subtitle is-4">
                                {{ $total_revenue }}
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="container">
            <div class="notification">
                <div class="columns is-vcentered">
                    <div class="column is-8">
                        <span class="title is-4 has-text-grey-light">Want to add collvents now?</span>
                    </div>
                    <div class="column is-4">
                        <a href="{{ route('collvent.create', $event->id) }}" class="button is-info is-fullwidth is-uppercase">Add Collvent</a>
                    </div>
                </div>
            </div>
            <div class="columns is-multiline">
                @include('collvent.layouts.collvent')
            </div>
        </div>
    </section>
    <section class="section">
        <div class="container">
            <div class="notification">
                <div class="columns is-vcentered">
                    <div class="column is-8">
                        <span class="title is-4 has-text-grey-light">Want to add tickets now?</span>
                    </div>
                    <div class="column is-4">
                        <a href="{{ route('ticket.create', $event->id) }}" class="button is-info is-fullwidth is-uppercase">Add tickets</a>
                    </div>
                </div>
            </div>
            <div class="columns is-multiline">
                @include('ticket.layouts.ticket')
            </div>
        </div>
    </section>
@endsection
