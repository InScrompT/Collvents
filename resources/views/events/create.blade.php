@extends('layouts.app')

@section('content')
    <section class="hero is-info is-medium">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="columns is-centered">
                    <div class="column is-8">
                        <h1 class="title">
                            Display the event in {{ env('APP_NAME') }}
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container">
        <div class="columns is-centered">
            <div class="column is-8">
                <section class="section">
                    <div class="notification is-primary">
                        You can add tickets, set rates and limit the quantity of tickets at the next page
                    </div>
                    <form action="{{ route('event.create') }}" method="post" id="eventForm">

                        {{ csrf_field() }}

                        <div class="has-margin-2">
                            <span class="is-size-4 has-text-grey-light">Create a new event...</span>
                        </div>

                        <div class="field">
                            <div class="control">
                                <label for="name">Event Name</label>
                                <input type="text" name="name" class="input" id="name" required>
                            </div>
                        </div>

                        <div class="field">
                            <div class="control">
                                <label for="college">College Name</label>
                                <input type="text" name="college" class="input" id="college" required>
                            </div>
                        </div>

                        <div class="field">
                            <div class="control">
                                <label for="description">Event Description</label>
                                <textarea class="textarea" id="description" name="description" required></textarea>
                            </div>
                        </div>

                        <div class="has-margin-2">
                            <span class="is-size-4 has-text-grey-light">Event timings...</span>
                        </div>

                        <div style="margin-bottom: 20px">
                            <span class="is-size-6 has-text-grey-light">Starts at...</span>
                        </div>

                        <div class="columns">
                            <div class="column is-8">
                                <div class="field">
                                    <div class="control">
                                        <label for="start_date">Date</label>
                                        <input type="date" class="input" id="start_date" name="start_date" required>
                                    </div>
                                </div>
                            </div>
                            <div class="column is-4">
                                <label for="start_time">Time (HH:MM AM/PM)</label>
                                <input type="time" class="input" id="start_time" name="start_time" required>
                            </div>
                        </div>

                        <div class="has-margin-2">
                            <span class="is-size-6 has-text-grey-light">Ends at...</span>
                        </div>

                        <div class="columns">
                            <div class="column is-8">
                                <div class="field">
                                    <div class="control">
                                        <label for="end_date">Date</label>
                                        <input type="date" class="input" id="end_date" name="end_date" required>
                                    </div>
                                </div>
                            </div>
                            <div class="column is-4">
                                <label for="end_time">Time (HH:MM AM/PM)</label>
                                <input type="time" class="input" id="end_time" name="end_time" required>
                            </div>
                        </div>

                        <div class="field">
                            <div class="control">
                                <input type="submit" value="Submit" class="button is-primary is-fullwidth" onclick="document.getElementById('eventForm').submit()">
                            </div>
                        </div>
                    </form>
                </section>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/tinymce@5.1.5/tinymce.min.js"></script>
    <script type="text/javascript">
        tinymce.init({
            selector: '#description',
            menubar: false,
            branding: false
        });
    </script>
@endsection
