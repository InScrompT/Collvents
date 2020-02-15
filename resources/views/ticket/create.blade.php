@extends('layouts.app')

@section('content')
    <section class="hero is-info is-medium">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="columns is-centered">
                    <div class="column is-8">
                        <h1 class="title">
                            Add ticket to {{ $event->name }} event
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container">
        <section class="section">
            <form action="{{ route('ticket.create', $event->id) }}" id="ticket-form" method="post">
                @csrf

                <div class="field">
                    <label class="is-capitalized" for="name">ticket name</label>
                    <div class="control">
                        <input class="input" id="name" name="name" placeholder="Ticket Name" type="text">
                    </div>
                </div>
                <div class="columns">
                    <div class="column is-6">
                        <div class="field">
                            <label class="is-capitalized" for="quantity-1">total quantity</label>
                            <div class="control">
                                <input class="input" id="quantity-1" name="quantity" type="number" value="100" min="0">
                            </div>
                        </div>
                    </div>
                    <div class="column is-6">
                        <div class="field">
                            <label class="is-capitalized" for="price-1">ticket price</label>
                            <div class="control">
                                <input class="input" id="price-1" name="price" type="number" value="0" min="0">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="field">
                    <label class="is-capitalized" for="description">ticket description</label>
                    <div class="control">
                        <textarea class="textarea" id="description" name="description"></textarea>
                    </div>
                </div>
                {{-- TODO: Remove this feature or add it as an addition feature under a hidden dropdown --}}
                {{--<div class="columns">
                    <div class="column is-6">
                        <div class="field">
                            <label class="is-capitalized" for="min-book-1">minimum per booking</label>
                            <div class="control">
                                <input class="input" id="min-book-1" name="minimum" placeholder="1" type="number" value="1" min="1">
                            </div>
                        </div>
                    </div>
                    <div class="column is-6">
                        <div class="field">
                            <label class="is-capitalized" for="max-book-1">maximum per booking</label>
                            <div class="control">
                                <input class="input" id="max-book-1" name="maximum" placeholder="100" type="number" value="1" min="1">
                            </div>
                        </div>
                    </div>
                </div>--}}

                <div class="notification has-margin-2">
                    <div class="columns">
                        <div class="column is-6">
                            <a class="button is-warning is-fullwidth" href="{{ route('ticket.list', [$event->id]) }}">&xlarr; Go Back</a>
                        </div>
                        <div class="column is-6">
                            <button class="button is-primary is-fullwidth" onclick="document.getElementById('ticket-form').submit()">Add Ticket &xrarr;</button>
                        </div>
                    </div>
                </div>
            </form>
        </section>
    </div>
@endsection
