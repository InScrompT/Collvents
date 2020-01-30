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
                    <div class="has-margin-2">
                        <span class="is-size-4 has-text-grey-light">Create a new event...</span>
                    </div>
                    <form action="{{ route('event.create') }}" method="post">
                        <div class="field">
                            <div class="control">
                                <label for="name">Event Name</label>
                                <input type="text" name="name" class="input" id="name">
                            </div>
                        </div>
                        <div class="columns">
                            <div class="column is-6">
                                <div class="field">
                                    <div class="control">
                                        <label for="city">City / Town</label>
                                        <input type="text" name="city" class="input" id="city">
                                    </div>
                                </div>
                            </div>
                            <div class="column is-6">
                                <div class="field">
                                    <div class="control">
                                        <label for="state">State</label>
                                        <input type="text" name="state" class="input" id="state">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="field">
                            <div class="control">
                                <label for="description">Event Description</label>
                                <textarea class="textarea" id="description" name="description"></textarea>
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
