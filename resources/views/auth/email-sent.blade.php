@extends('layouts.app')

@section('content')
<div class="container">
    <section class="section">
        <div class="has-margin-2">
            <div class="card">
                <div class="card-content">
                    <p class="subtitle">Magic link has been sent</p>
                    <p>Before proceeding, please check your email for a magic link. It will help you to login into your account.</p>
                    <p>Click the button below if you still did not get the magic link. Do check your spam folder too</p>

                    <br>

                    <form class="d-inline" method="POST" action="{{ route('auth.login') }}">
                        @csrf
                        <input type="email" name="email" hidden value="{{ $email }}">
                        <button type="submit" class="button is-primary">Click here to request another</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
