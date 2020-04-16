@extends('layouts.app')

@section('content')
    <section class="hero is-info is-medium">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="columns is-centered">
                    <div class="column is-8">
                        <p class="title">
                            {{ $event->name }}
                        </p>
                        <div class="subtitle">
                            {{ $event->college->name }} &mdash; {{ $event->college->city }}, {{ $event->college->state }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="has-margin-2">
        <div class="container">
            {{--<div class="notification">
                <div class="columns is-vcentered">
                    <div class="column is-8">
                        <p class="title is-4 has-text-grey-light">
                            Selected: <span id="selected">0</span>
                        </p>
                    </div>
                    <div class="column is-4 has-text-right">
                        <p class="title is-4 has-text-grey-light">
                            Total: <span id="total">0</span>
                        </p>
                    </div>
                </div>
            </div>--}}
            <div class="columns">
                <div class="column is-8">
                    <div class="card">
                        <div class="card-content">

                        </div>
                    </div>
                </div>
                <div class="column is-4">
                    <div class="card">
                        <div class="card-content has-text-centered">
                            <p class="title is-4 has-text-grey-light">Selected: <span id="selected">0</span></p>
                        </div>
                    </div>
                    <div class="card has-margin-2">
                        <div class="card-content has-text-centered">
                            <p class="title is-4 has-text-grey-light">Total: <span id="total">0</span></p>
                        </div>
                    </div>
                    <div class="has-margin-2">
                        <a href="#" class="button is-fullwidth is-primary">Proceed &longrightarrow;</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
