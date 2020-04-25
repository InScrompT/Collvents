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
            <div class="columns">
                <div class="column is-8">
                    @foreach($event->tickets as $ticket)
                        <div class="card @if(! $loop->first) has-margin-2 @endif">
                            <div class="card-content">
                                <div class="columns level">
                                    <div class="column is-6 level-item">
                                        <p class="is-size-4 is-bold">{{ $ticket->name }}</p>
                                        <p class="is-size-6">{{ $ticket->description }}</p>
                                    </div>
                                    <div class="column is-3 has-text-centered level-item">
                                        <p class="is-size-5 is-bold">
                                            @if($ticket->price == 0)
                                                FREE
                                            @else
                                                {{ $ticket->price }} /-
                                            @endif
                                        </p>
                                    </div>
                                    <div class="column is-3 level-item">
                                        <div class="columns">
                                            <div class="column is-4">
                                                <button class="button is-primary is-outlined is-fullwidth">-</button>
                                            </div>
                                            <div class="column is-4">
                                                <div class="field">
                                                    <input type="text" class="input has-text-centered" value="0" disabled>
                                                </div>
                                            </div>
                                            <div class="column is-4">
                                                <button class="button is-primary is-outlined is-fullwidth">+</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
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

@section('scripts')
    <script>

    </script>
@endsection
