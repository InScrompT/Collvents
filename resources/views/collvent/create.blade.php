@extends('layouts.app')

@section('content')
    <section class="hero is-info is-medium">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="columns is-centered">
                    <div class="column is-8">
                        <h1 class="title">
                            Add a sub-event to {{ $event->name }} event
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="container">
            <form action="{{ route('collvent.create', [$event->id]) }}" id="collventForm" method="post">
                @csrf

                <div class="field">
                    <label for="name">Sub-Event Name</label>
                    <div class="control">
                        <input type="text" name="name" id="name" class="input">
                    </div>
                </div>

                <div class="field">
                    <label for="description">Sub-Event Description</label>
                    <div class="control">
                        <textarea name="description" id="description" class="textarea"></textarea>
                    </div>
                </div>
            </form>
            <div class="notification has-margin-2">
                <div class="columns">
                    <div class="column is-6">
                        <a class="button is-warning is-fullwidth" href="{{ route('collvent.list', [$event->id]) }}">&xlarr; Go Back</a>
                    </div>
                    <div class="column is-6">
                        <button class="button is-primary is-fullwidth" onclick="document.getElementById('collventForm').submit()">Add Sub-Event &xrarr;</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
