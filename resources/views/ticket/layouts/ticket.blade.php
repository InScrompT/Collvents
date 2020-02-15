@foreach($tickets as $ticket)
    <div class="column is-6">
        <div class="card">
            <div class="card-content">
                <p class="is-size-5 has-text-grey-dark is-uppercase">
                    {{ $ticket->name }} &mdash; ₹ {{ $ticket->price }}
                    @can('update', [App\Ticket::class, $event])
                    &mdash; <a href="">Edit</a>
                    @endcan
                </p>
                <p class="is-size-6 has-text-grey">Quantity: {{ $ticket->quantity }}</p>
                <p class="is-size-6 has-text-grey">{{ $ticket->description }}</p>
            </div>
        </div>
    </div>
@endforeach
