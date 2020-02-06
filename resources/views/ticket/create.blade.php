@extends('layouts.app')

@section('content')
    <section class="hero is-info is-medium">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="columns is-centered">
                    <div class="column is-8">
                        <h1 class="title">
                            Add tickets to eventName event
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container">
        <section class="section">
            <div class="has-margin-2">
                <div class="notification">
                    <div class="columns is-vcentered">
                        <div class="column is-8">
                            <span class="subtitle is-4 has-text-grey">Total Tickets: 0</span>
                        </div>
                        <div class="column is-4">
                            <button class="button is-primary is-fullwidth is-uppercase">Add ticket</button>
                        </div>
                    </div>
                </div>
            </div>
            <form action="">
                <div class="has-margin-2">
                    <div class="notification">
                        <div class="field">
                            <div class="control">
                                <label for="name" class="is-capitalized">ticket name</label>
                                <input type="text" class="input" id="name" placeholder="Ticket Name">
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </section>
    </div>
@endsection
