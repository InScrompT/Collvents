@extends('layouts.app')

@section('content')
    <div class="section">
        <div class="container">
            <div class="column is-12">
                <div class="title">
                    {{ $event->name }}
                </div>
                <div class="subtitle">
                    Another event, that mean nothing to you, but experience is what that differs
                </div>
            </div>
        </div>
    </div>
    <section>
        <div class="container">
            <div class="columns">
                <div class="column is-12">
                    <div class="card is-fullwidth">
                        <div class="card-image">
                            <figure class="image is-3by1">
                                <img src="https://via.placeholder.com/1080" alt="Placeholder image">
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="has-margin-2">
        <div class="container">
            <div class="columns">
                <div class="column is-4">
                    <div class="card is-fullwidth">
                        <div class="card-content">
                            <div class="content is-size-5">
                                <i class="fas fa-calendar-week has-text-primary"></i> {{ $event->start_date->toFormattedDateString() }}
                                <br>
                                <i class="far fa-clock has-text-primary"></i> {{ $event->start_time }}
                            </div>
                        </div>
                    </div>
                    <div class="card is-fullwidth has-margin-2">
                        <div class="card-content">
                            <div class="content has-text-centered is-size-4">
                                <span class="has-text-weight-bold">₹{{ $onwards->price }}</span> - <span class="has-text-grey-light">onwards</span>
                            </div>
                        </div>
                        <footer class="card-footer">
                            <span class="card-footer-item">
                                <a href="#" class="button is-primary is-fullwidth is-uppercase has-text-weight-bold">book now</a>
                            </span>
                        </footer>
                    </div>
                </div>
                <div class="column is-8">
                    <div class="card is-fullwidth">
                        <div class="card-header">
                            <div class="card-header-title is-size-4">Event Description</div>
                        </div>
                        <div class="card-content">
                            {!! $event->description !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <article class="panel">
                <p class="panel-heading">Collvents</p>
                @foreach($event->collvents as $collvent)
                    <div class="panel-block">
                        <span class="panel-icon">
                            <i class="fas fa-book" aria-hidden="true"></i>
                        </span>
                        <article class="media">
                            <div class="media-content">
                                <div class="content">
                                    <p>
                                        <strong>{{ $collvent->name }}</strong>
                                        <br>
                                        {{ $collvent->description }}
                                    </p>
                                </div>
                            </div>
                        </article>
                    </div>
                @endforeach
            </article>
        </div>
    </section>
    <span style="padding-bottom: 10rem;">&nbsp;</span>
@endsection

@section('scripts')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.13.0/css/all.min.css">
@endsection
