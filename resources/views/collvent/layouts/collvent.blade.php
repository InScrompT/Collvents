@foreach($collvents as $collvent)
    <div class="column is-6">
        <div class="card">
            <div class="card-content">
                <p class="has-text-grey-dark is-uppercase is-size-5" style="padding-bottom: 10px">
                    {{ $collvent->name }}
                    @can('update', [App\Collvent::class, $event])
                    &mdash; <a href="">Edit</a>
                    @endcan
                </p>
                <p class="is-size-6 has-text-grey">{{ $collvent->description }}</p>
            </div>
        </div>
    </div>
@endforeach
