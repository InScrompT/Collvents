@extends('layouts.app')

@section('content')
    <section class="hero is-info is-medium">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="columns is-centered">
                    <div class="column is-8">
                        <h1 class="title">
                            Welcome to InVents, {{ Auth::user()->name ?? Auth::user()->email  }}!
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="container">
            <div class="has-margin-2">
                <div class="tabs is-centered">
                    <ul>
                        <li class="is-active"><a>Your Events</a></li>
                        <li><a>Going</a></li>
                        <li><a>Transactions</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection
