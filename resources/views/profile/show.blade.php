@extends('layouts.app')

@section('content')
    <section class="hero is-info is-medium">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="columns is-centered">
                    <div class="column is-8">
                        <h1 class="title">
                            Profile of {{ $profile->name }}
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="has-margin-2">
        <div class="container">
            <div class="notification">
                <div class="columns is-vcentered">
                    <div class="column is-8">
                        <span class="title is-4 has-text-grey-light">Wanna edit your profile and pimp up?</span>
                    </div>
                    <div class="column is-4">
                        <a href="{{ route('profile.edit') }}" class="button is-fullwidth is-info">Edit Profile</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="has-margin-2">
        <div class="container">
            <div class="panel">
                <p class="panel-heading">
                    Profile
                </p>
                <p class="panel-block">
                    Email: {{ $profile->user->email }}
                </p>
                <p class="panel-block">
                    Name: {{ $profile->name }}
                </p>
                <p class="panel-block">
                    Phone: {{ $profile->phone }}
                </p>
                <p class="panel-block">
                    Date of Birth: {{ $profile->birthday->isoFormat('DD/MM/YYYY') }}
                </p>
            </div>
        </div>
    </section>
@endsection
