@extends('layouts.app')

@section('content')
<div class="container">
    <section class="section">
        <div class="has-margin-2">
            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
            <div class="card">
                <div class="card-content">
                    <p class="subtitle">Login / Register</p>
                    <form method="POST" action="{{ route('auth.login') }}">
                        @csrf

                        <div class="field">
                            <label for="email">E-Mail Address</label>
                            <div class="control">
                                <input type="email" class="input @error('email') is-danger @enderror" id="email" name="email">
                            </div>
                        </div>

                        <div class="field">
                            <div class="control">
                                <label class="checkbox">
                                    <input type="checkbox" name="remember" id="">
                                    Remember me
                                </label>
                            </div>
                        </div>

                        <div class="field">
                            <div class="control">
                                <button type="submit" class="button is-primary">
                                    Get magic link
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
