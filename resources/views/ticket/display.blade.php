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
                    <div class="card">
                        <footer class="card-content">
                            @foreach($event->tickets as $ticket)
                                @if ($loop->first) @else <hr> @endif
                                <div class="">
                                    <div class="columns level">
                                        <div class="column is-9 level-item">
                                            <p class="is-size-4 is-bold">
                                                {{ $ticket->name }}
                                                &mdash;
                                                <span class="is-size-5 is-normal">
                                                    @if($ticket->price == 0) FREE @else {{ $ticket->price }} /- @endif
                                                </span>
                                            </p>
                                            <p class="is-size-6">{{ $ticket->description }}</p>
                                        </div>
                                        <div class="column is-3 level-item">
                                            <div class="columns is-mobile">
                                                <div class="column is-4">
                                                    <button class="button is-primary is-outlined is-fullwidth minus price-{{ $ticket->price }}" id="{{ $ticket->id }}">-</button>
                                                </div>
                                                <div class="column is-4">
                                                    <div class="field">
                                                        <input type="text" class="input has-text-centered" value="0" id="selected-{{ $ticket->id }}" readonly>
                                                    </div>
                                                </div>
                                                <div class="column is-4">
                                                    <button class="button is-primary is-outlined is-fullwidth plus price-{{ $ticket->price }}" id="{{ $ticket->id }}">+</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </footer>
                    </div>
                </div>
                <div class="column is-4">
                    <div class="card">
                        <div class="card-content has-text-centered">
                            <p class="title is-4 has-text-grey-light">Selected: <span id="selected">0</span></p>
                        </div>
                        <footer class="card-footer has-text-centered">
                            <div class="card-footer-item">
                                <p class="title is-4 has-text-grey-light">Total: <span id="total">0</span></p>
                            </div>
                        </footer>
                        <footer class="card-footer">
                            <div class="card-footer-item">
                                <a href="#" class="button is-fullwidth is-primary" id="rzp-button">Proceed &longrightarrow;</a>
                            </div>
                        </footer>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert@2.1.2/dist/sweetalert.min.js"></script>

    <script>
        let totalSelected = 0;
        let totalBillable = 0;
        let ticketsChecked = [];

        (function resetValues() {
            let inputTags = document.getElementsByClassName('input');
            for (let i = 0; i < inputTags.length; i++) (function (i) {
                inputTags[i].value = 0;
            })(i);
        })();

        document.getElementById('rzp-button').onclick = createOrder;

        function createOrder(e) {
            e.preventDefault();
            let theOrderButton = document.getElementById('rzp-button');

            if (totalSelected === 0) {
                swal('Oops', 'No tickets added', 'error');
            }

            theOrderButton.classList.add('is-loading');

            swal({
                text: 'Enter your E-Mail Address',
                content: 'input',
                button: {
                    text: 'Proceed',
                    closeModal: false
                },
                closeOnClickOutside: false,
                closeOnEsc: false
            }).then(email => {
                if (! isEmail(email)) throw new Error('Please enter a proper email');
                return axios.default.post('{{ route('ticket.order', $event->id) }}', {ticketsChecked, email});
            }).then(axiosRes => {

            }).catch(err => {
                console.error(err.message);
                swal('Oops', 'Something happened. Try Again', 'error');
            });

            theOrderButton.classList.remove('is-loading');
        }

        function addTicket(id) {
            let particularTicket = _.find(ticketsChecked, function (obj) {
                return obj.id === id
            });

            if (! particularTicket) {
                return ticketsChecked.push({
                    id,
                    quantity: 1
                });
            }

            let ticketIdArray = _.findIndex(ticketsChecked, function (obj) {
                return obj.id === id;
            });
            ticketsChecked[ticketIdArray].quantity += 1;
        }

        function removeTicket(id) {
            _.remove(ticketsChecked, function (obj) {
                return obj.quantity === 0;
            });

            let particularTicket = _.find(ticketsChecked, function (obj) {
                return obj.id === id;
            });

            if (! particularTicket) return;

            let ticketIDArray = _.findIndex(ticketsChecked, function (obj) {
                return obj.id === id;
            });

            if (ticketsChecked[ticketIDArray].quantity > 0) {
                ticketsChecked[ticketIDArray].quantity -= 1;
            }
        }

        function cartChanged(theButton, increment) {
            let thePrice = _.last(theButton.classList).split('-');

            if (increment) {
                totalBillable += parseInt(thePrice[1]);
            } else {
                if (totalBillable > 0) {
                    totalBillable -= parseInt(thePrice[1]);
                }
            }

            updateTotal();
            updateSelected();
        }

        function updateSelected() {
            totalSelected = 0; // Reset it every-time
            _.each(ticketsChecked, function (obj) {
                totalSelected += obj.quantity;
                document.getElementById('selected-' + obj.id).value = obj.quantity;
            });

            document.getElementById('selected').innerHTML = totalSelected;
        }

        function updateTotal() {
            document.getElementById('total').innerHTML = totalBillable;
        }

        let pluses = document.getElementsByClassName('plus');
        for (let i = 0; i < pluses.length; i++) (function (i) {
            let thePlus = pluses[i];
            thePlus.onclick = function (e) {
                addTicket(parseInt(thePlus.id));
                cartChanged(thePlus, true);
                e.preventDefault();
            }
        })(i);

        let minuses = document.getElementsByClassName('minus');
        for (let i = 0; i < minuses.length; i++) (function (i) {
            let theMinus = minuses[i];
            theMinus.onclick = function (e) {
                removeTicket(parseInt(theMinus.id));
                cartChanged(theMinus, false);
                e.preventDefault();
            }
        })(i);

        let options = {
            "key": "{{ config('services.razorpay.key') }}",
            "amount": "50000",
            "currency": "INR",
            "name": "InCollvents",
            "description": "Ticketing system made fruitful",
            "image": "{{ asset('images/collvents.png') }}",
            "order_id": "order_9A33XWu170gUtm",
            "handler": function (response) {
                alert('Check Console');
                console.log(response.razorpay_payment_id, response.razorpay_order_id, response.razorpay_signature)
            },
            "prefill": {
                "name": "Gaurav Kumar",
                "email": "gaurav.kumar@example.com",
            },
            "theme": {
                "color": "#F37254"
            }
        };
        let rzp1 = new Razorpay(options);
        // document.getElementById('rzp-button').onclick = function(e) {
        //     rzp1.open();
        //     e.preventDefault();
        // }
    </script>
@endsection
