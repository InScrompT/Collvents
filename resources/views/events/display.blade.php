@extends('layouts.app')

@section('head')
    {{--  TODO: Complete these fields  --}}
    <meta property="og:description" content="{{ $event->tagline }}" />
    <meta property="og:image" content="{{ $event->banner }}" />
    <meta name="twitter:card" content="{{ $event->banner }}" />

    <meta property="og:type" content="website" />
    <meta name="twitter:site" content="@InCollvents" />
    <meta property="og:site_name" content="InCollvents" />
    <meta property="og:url" content="{{ route('event.display', $event->id) }}" />
    <meta property="og:title" content="{{ $event->name }} | InCollvents | Buy event tickets now" />

    <script type="application/ld+json">
        {
            "@context": "http://schema.org/",
            "@type": "Event",
            "url": "{{ route('event.display', $event->id) }}",
            "name": "{{ $event->name }}",
            "image": "{{ $event->banner }}",
            "description": "{{ $event->tagline }}",
            "startDate": "{{ $event->start_date }}",
            "endDate": "{{ $event->end_date }}",
            "maximumAttendeeCapacity": {{ $totalAttendee }},
            "remainingAttendeeCapacity": 80,
            "eventAttendanceMode": "http://schema.org/Online",
            "eventStatus": "https://schema.org/EventScheduled",
            "location": {
                "@type": "Place",
                "address": {
                    "@type": "PostalAddress",
                    "addressLocality": "{{ $event->college->city }}",
                    "addressRegion": "{{ $event->college->state }}",
                    "addressCountry": "IN"
                },
                "name": "{{ $event->college->name }}"
            },
            @if($event->tickets->count() > 1)
                "offers": [
                    @foreach($event->tickets as $ticket)
                        {
                            "@type": "Offer",
                            "price": {{ $ticket->price }},
                            "availability" : "http://schema.org/LimitedAvailability",
                            "priceCurrency": "INR",
                            "url": "{{ route('event.display', $event->id) }}"
                        }@if(!$loop->last),@endif
                    @endforeach
                ],
            @else
                "offers": {
                    "@type": "Offer",
                    "price": {{ $ticket->price }},
                    "availability" : "http://schema.org/LimitedAvailability",
                    "priceCurrency": "INR",
                    "url": "{{ route('event.display', $event->id) }}"
                },
            @endif
            "eventSchedule": {
                "@type": "Schedule",
                "startDate": "{{ $event->start_date }}",
                "endDate": "{{ $event->end_date }}",
                "scheduleTimezone": "Asia/Kolkata"
            },
            "workPerformed": [
                @foreach($event->collvents as $collvent)
                    {
                        "@type": "CreativeWork",
                        "name": "{{ $collvent->name }}"
                    }@if(!$loop->last),@endif
                @endforeach
            ],
            "organizer": {
                "@type": "Person",
                "name": "{{ $event->organizer->profile->name }}",
                "email": "{{ $event->organizer->email }}",
                "telephone": "{{ $event->organizer->profile->phone }}"
            }
        }
    </script>
@endsection

@section('content')
    <div class="section">
        <div class="container">
            <div class="columns">
                <div class="column is-8">
                    <div class="title">
                        {{ $event->name }}
                    </div>
                    <div class="subtitle">
                        Another event, that mean nothing to you, but experience is what that differs
                    </div>
                </div>
                <div class="column is-4">
                    <div class="card">
                        <div class="card-content">
                            <div class="level is-mobile">
                                <a class="level-item has-text-centered instagram">
                                    <i class="fab fa-instagram"></i>
                                </a>
                                <a class="level-item has-text-centered whatsapp">
                                    <i class="fab fa-whatsapp"></i>
                                </a>
                                <a class="level-item has-text-centered facebook" href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(route('event.display', $event->id)) }}&title={{ urlencode('Book your tickets and let\'s meet up at ' . $event->name . ' event. It will be awesome') }}">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a target="_blank" class="level-item has-text-centered twitter" href="https://twitter.com/intent/tweet?text={{ urlencode('Book your tickets and let\'s meet up at ' . $event->name . ' event. It will be awesome') }}&url={{ urlencode(route('event.display', $event->id)) }}&hashtags={{ urlencode('InCollvents #BookYourTickets') }}">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </div>
                        </div>
                    </div>
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
                                <i class="far fa-clock has-text-primary"></i> {{ date('h:i A', strtotime($event->start_time)) }}
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
                <p class="panel-heading">Collvents <span class="has-text-grey-light"> &mdash; events</span></p>
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
