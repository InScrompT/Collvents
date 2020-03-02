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

                        @csrf

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
                                <div class="field">
                                    <label for="start_time">Time</label>
                                    <div class="control">
                                        <div class="select is-fullwidth">
                                            <select name="start_time" id="start_time" required>
                                                <option value="12:00AM">12:00AM</option>
                                                <option value="12:30AM">12:30AM</option>
                                                <option value="01:00AM">01:00AM</option>
                                                <option value="01:30AM">01:30AM</option>
                                                <option value="02:00AM">02:00AM</option>
                                                <option value="02:30AM">02:30AM</option>
                                                <option value="03:00AM">03:00AM</option>
                                                <option value="03:30AM">03:30AM</option>
                                                <option value="04:00AM">04:00AM</option>
                                                <option value="04:30AM">04:30AM</option>
                                                <option value="05:00AM">05:00AM</option>
                                                <option value="05:30AM">05:30AM</option>
                                                <option value="06:00AM">06:00AM</option>
                                                <option value="06:30AM">06:30AM</option>
                                                <option value="07:00AM">07:00AM</option>
                                                <option value="07:30AM">07:30AM</option>
                                                <option value="08:00AM">08:00AM</option>
                                                <option value="08:30AM">08:30AM</option>
                                                <option value="09:00AM">09:00AM</option>
                                                <option value="09:30AM">09:30AM</option>
                                                <option value="10:00AM">10:00AM</option>
                                                <option value="10:30AM">10:30AM</option>
                                                <option value="11:00AM">11:00AM</option>
                                                <option value="11:30AM">11:30AM</option>

                                                <option value="12:00PM">12:00PM</option>
                                                <option value="12:30PM">12:30PM</option>
                                                <option value="01:00PM">01:00PM</option>
                                                <option value="01:30PM">01:30PM</option>
                                                <option value="02:00PM">02:00PM</option>
                                                <option value="02:30PM">02:30PM</option>
                                                <option value="03:00PM">03:00PM</option>
                                                <option value="03:30PM">03:30PM</option>
                                                <option value="04:00PM">04:00PM</option>
                                                <option value="04:30PM">04:30PM</option>
                                                <option value="05:00PM">05:00PM</option>
                                                <option value="05:30PM">05:30PM</option>
                                                <option value="06:00PM">06:00PM</option>
                                                <option value="06:30PM">06:30PM</option>
                                                <option value="07:00PM">07:00PM</option>
                                                <option value="07:30PM">07:30PM</option>
                                                <option value="08:00PM">08:00PM</option>
                                                <option value="08:30PM">08:30PM</option>
                                                <option value="09:00PM">09:00PM</option>
                                                <option value="09:30PM">09:30PM</option>
                                                <option value="10:00PM">10:00PM</option>
                                                <option value="10:30PM">10:30PM</option>
                                                <option value="11:00PM">11:00PM</option>
                                                <option value="11:30PM">11:30PM</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
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
                                <div class="field">
                                    <label for="end_time">Time</label>
                                    <div class="control">
                                        <div class="select is-fullwidth">
                                            <select name="end_time" id="end_time" required>
                                                <option value="12:00AM">12:00AM</option>
                                                <option value="12:30AM">12:30AM</option>
                                                <option value="01:00AM">01:00AM</option>
                                                <option value="01:30AM">01:30AM</option>
                                                <option value="02:00AM">02:00AM</option>
                                                <option value="02:30AM">02:30AM</option>
                                                <option value="03:00AM">03:00AM</option>
                                                <option value="03:30AM">03:30AM</option>
                                                <option value="04:00AM">04:00AM</option>
                                                <option value="04:30AM">04:30AM</option>
                                                <option value="05:00AM">05:00AM</option>
                                                <option value="05:30AM">05:30AM</option>
                                                <option value="06:00AM">06:00AM</option>
                                                <option value="06:30AM">06:30AM</option>
                                                <option value="07:00AM">07:00AM</option>
                                                <option value="07:30AM">07:30AM</option>
                                                <option value="08:00AM">08:00AM</option>
                                                <option value="08:30AM">08:30AM</option>
                                                <option value="09:00AM">09:00AM</option>
                                                <option value="09:30AM">09:30AM</option>
                                                <option value="10:00AM">10:00AM</option>
                                                <option value="10:30AM">10:30AM</option>
                                                <option value="11:00AM">11:00AM</option>
                                                <option value="11:30AM">11:30AM</option>

                                                <option value="12:00PM">12:00PM</option>
                                                <option value="12:30PM">12:30PM</option>
                                                <option value="01:00PM">01:00PM</option>
                                                <option value="01:30PM">01:30PM</option>
                                                <option value="02:00PM">02:00PM</option>
                                                <option value="02:30PM">02:30PM</option>
                                                <option value="03:00PM">03:00PM</option>
                                                <option value="03:30PM">03:30PM</option>
                                                <option value="04:00PM">04:00PM</option>
                                                <option value="04:30PM">04:30PM</option>
                                                <option value="05:00PM">05:00PM</option>
                                                <option value="05:30PM">05:30PM</option>
                                                <option value="06:00PM">06:00PM</option>
                                                <option value="06:30PM">06:30PM</option>
                                                <option value="07:00PM">07:00PM</option>
                                                <option value="07:30PM">07:30PM</option>
                                                <option value="08:00PM">08:00PM</option>
                                                <option value="08:30PM">08:30PM</option>
                                                <option value="09:00PM">09:00PM</option>
                                                <option value="09:30PM">09:30PM</option>
                                                <option value="10:00PM">10:00PM</option>
                                                <option value="10:30PM">10:30PM</option>
                                                <option value="11:00PM">11:00PM</option>
                                                <option value="11:30PM">11:30PM</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
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
