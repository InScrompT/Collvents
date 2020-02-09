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
                            <button class="button is-primary is-fullwidth is-uppercase" id="add-ticket">Add ticket</button>
                        </div>
                    </div>
                </div>
            </div>
            <form action="" id="ticket-form">
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

@section('scripts')
    <script>
        var ticketNumber = 1;

        document.getElementById('add-ticket').addEventListener('click', function (event) {
            event.preventDefault();
            addTicketField();
            ticketNumber++;
        });

        function addTicketField() {
            var ticket = document.createElement('div');
            ticket.classList = "has-margin-2";
            ticket.innerHTML = '<div class="notification">' +
                `<span class="is-size-4 has-text-grey-light">Ticket ${ticketNumber}</span>` +
                '<div class="field">' +
                    '<div class="control">' +
                        '<label for="name" class="is-capitalized">ticket name</label>' +
                        '<input type="text" class="input" id="name" placeholder="Ticket Name">' +
                    '</div>' +
                '</div>' +
            '</div>';
            document.getElementById('ticket-form').appendChild(ticket);
        }
    </script>
@endsection
