@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Magic link has been sent</div>

                <div class="card-body">
                    Before proceeding, please check your email for a magic link. It will help you to login into your account
                    {{ __('If you did not receive the email') }},
                    <form class="d-inline" method="POST" action="{{ route('auth.login') }}">
                        @csrf
                        <input type="email" name="email" hidden value="{{ email }}">
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
