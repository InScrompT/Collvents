@extends('layouts.app')

@section('content')
    <section class="hero is-info is-medium">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="columns is-centered">
                    <div class="column is-8">
                        <h1 class="title">
                            College events, workshops, festivals and what not?
                        </h1>
                        <form action="">
                            <div class="control">
                                <input type="text" class="input is-medium" placeholder="Search for events in cities or college near you.">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="container">
            <div class="has-margin-2">
                <span class="is-size-4 has-text-grey-light">Events near you...</span>
            </div>
            <div class="columns">
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
                                        <a href="" class="button is-primary is-fullwidth">Attend</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
            <div class="is-pulled-right">
                <a href="#" class="is-info">...load more events</a>
            </div>
        </div>
    </section>
@endsection
