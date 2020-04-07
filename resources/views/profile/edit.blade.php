@extends('layouts.app')

@section('content')
    <section class="hero is-info is-medium">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="columns is-centered">
                    <div class="column is-8">
                        <h1 class="title">
                            Profile of {{ $profile->name ?? Auth::user()->email }}
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @if(session('success'))
        <section class="has-margin-2">
            <div class="container">
                <div class="notification is-success">
                    <div class="columns is-vcentered">
                        <div class="column is-12">
                            <span class="title is-4 has-text-grey-light">{{ session('success') }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif

    <section class="has-margin-2">
        <div class="container">
            <div class="card">
                <div class="card-content">
                    <p class="title has-text-grey-light">Profile</p>
                    <p class="subtitle has-text-grey-light">Enter the details below so we can understand the best of you</p>
                    <form action="{{ route('profile.edit') }}" method="post">
                        @csrf

                        <div class="field">
                            <label for="name">Name</label>
                            <div class="control">
                                <input type="text" name="name" class="input" id="name" value="{{ $profile->name ?? '' }}">
                            </div>
                        </div>

                        <div class="field">
                            <label for="phone">Phone Number</label>
                            <div class="control">
                                <input type="number" name="phone" class="input" id="phone" value="{{ $profile->phone ?? '' }}">
                            </div>
                        </div>

                        <div class="field">
                            <label for="birthday">Birthday</label>
                            <div class="control">
                                <input type="date" id="birthday" name="birthday" class="input" value="{{ $profile->birthday ?? '' }}">
                            </div>
                        </div>

                        <div class="field">
                            <br />
                            <div class="control">
                                <input type="submit" value="Submit" class="button is-primary">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
