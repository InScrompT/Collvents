@extends('layouts.app')

@section('content')
    <section class="hero is-info is-medium">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="columns is-centered">
                    <div class="column is-8">
                        <h1 class="title">
                            Add tickets to {{ $event_name }} event
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container">
        <section class="section">
            <div class="has-margin-2">
                <div class="notification has-text-centered-mobile">
                    <div class="columns is-vcentered">
                        <div class="column is-8">
                            <span class="subtitle is-4 has-text-grey">Total Tickets: <span id="ticket-count">0</span></span>
                        </div>
                        <div class="column is-4">
                            <button class="button is-primary is-fullwidth is-uppercase" id="add-ticket">Add ticket</button>
                        </div>
                    </div>
                </div>
            </div>
            <form action="{{ route('ticket.create', [$event_id]) }}" id="ticket-form" method="post">
                @csrf

                <span id="ticket-insert"></span>

                <div class="field" style="display: none" id="ticket-submit">
                    <div class="control">
                        <input type="submit" value="Save Tickets" class="input button is-primary is-fullwidth is-uppercase">
                    </div>
                </div>
            </form>
        </section>
    </div>
@endsection

@section('scripts')
    <script>
        var ticketNumber = 0;

        function saveForm(event) {
            document.getElementById('ticket-form').submit();
        }

        document.addEventListener('DOMContentLoaded', function () {
            document.getElementById('add-ticket').addEventListener('click', function (event) {
                ticketNumber++;
                event.preventDefault();

                if (ticketNumber > 0) {
                    document.getElementById('ticket-submit').removeAttribute('style');
                }

                document.getElementById('ticket-count').innerText = `${ticketNumber}`;

                var ticket = document.createElement('div');
                ticket.classList = "has-margin-2";
                ticket.innerHTML = `<div class="notification" id="ticket-${ticketNumber}">` +
                    '<div class="field">' +
                        '<label for="name" class="is-capitalized">ticket name</label>' +
                        '<div class="control">' +
                            '<input type="text" class="input" id="name" placeholder="Ticket Name" name="name[]">' +
                        '</div>' +
                    '</div>' +
                    '<div class="columns">' +
                        '<div class="column is-6">' +
                            '<div class="field">' +
                                `<label for="quantity-${ticketNumber}" class="is-capitalized">total quantity</label>` +
                                '<div class="control">' +
                                    `<input type="number" class="input" id="quantity-${ticketNumber}" name="quantity[]">` +
                                '</div>' +
                            '</div>' +
                        '</div>' +
                        '<div class="column is-6">' +
                            '<div class="field">' +
                                `<label for="price-${ticketNumber}" class="is-capitalized">ticket price</label>` +
                                '<div class="control">' +
                                    `<input type="number" class="input" id="price-${ticketNumber}" name="price[]">` +
                                '</div>' +
                            '</div>' +
                        '</div>' +
                    '</div>' +
                    '<div class="field">' +
                        '<label for="description" class="is-capitalized">ticket description</label>' +
                        '<div class="control">' +
                            '<textarea name="description[]" id="description" class="textarea"></textarea>' +
                        '</div>' +
                    '</div>' +
                    '<div class="columns">' +
                        '<div class="column is-6">' +
                            '<div class="field">' +
                                `<label for="min-book-${ticketNumber}" class="is-capitalized">minimum per booking</label>` +
                                '<div class="control">' +
                                    `<input type="number" class="input" id="min-book-${ticketNumber}" name="minimum[]" placeholder="1">` +
                                '</div>' +
                            '</div>' +
                        '</div>' +
                        '<div class="column is-6">' +
                            '<div class="field">' +
                                `<label for="max-book-${ticketNumber}" class="is-capitalized">maximum per booking</label>` +
                                '<div class="control">' +
                                    `<input type="number" class="input" id="max-book-${ticketNumber}" name="maximum[]" placeholder="100">` +
                                '</div>' +
                            '</div>' +
                        '</div>' +
                    '</div>' +
                '</div>';

                document.getElementById('ticket-insert').appendChild(ticket);
            });
        });
    </script>
@endsection
