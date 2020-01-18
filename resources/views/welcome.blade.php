<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>{{ env('APP_NAME') }} | A single stop to get all college events, fests and competitions</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body>
        <nav class="navbar">
            <div class="container">
                <div class="navbar-brand">
                    <a href="{{ route('index') }}" class="navbar-item">
                        <span class="navbar-item" style="font-size: 1.5em">Collvents</span>
                    </a>

                    {{--Hamburger menu, must have three spans to show three dashes--}}
                    <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false">
                        <span aria-hidden="true"></span>
                        <span aria-hidden="true"></span>
                        <span aria-hidden="true"></span>
                    </a>
                </div>
                <div class="navbar-menu">
                    <div class="navbar-end">
                        <a href="{{ route('auth.login') }}" class="navbar-item">Account</a>
                        <div class="navbar-item">
                            <a href="#" class="button is-primary">Submit Event</a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <section class="hero is-info is-medium">
            <div class="hero-body">
                <div class="container has-text-centered">
                    <div class="columns is-centered">
                        <div class="column is-8">
                            <h1 class="title">
                                College events, workshops, festivals and what not?
                            </h1>
                            <form action="">
                                <div class="control">
                                    <input type="text" class="input is-medium" placeholder="Search for events in cities or college near you.">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section">
            <div class="container">
                <div class="has-margin-2">
                    <span class="is-size-4 has-text-grey-light">Events near you...</span>
                </div>
                <div class="columns">
                    <div class="column is-3">
                        <div class="card">
                            <div class="card-image">
                                <figure class="image is-5by3">
                                    <img src="https://via.placeholder.com/1080" alt="Placeholder image">
                                </figure>
                            </div>
                            <div class="card-content">
                                <p class="is-size-7 has-text-primary is-uppercase">jan 23, 12:20 am</p>
                                <p class="has-text-grey-dark is-uppercase event-title">mechamorphis 2k20</p>
                                <a href="#" class="is-size-7 has-text-grey is-uppercase">
                                    kcg college of technology
                                </a>
                                <br/>
                                <a href="#" class="is-size-7 has-text-grey is-uppercase">Chennai</a>,
                                <a href="#" class="is-size-7 has-text-grey is-uppercase">Tamilnadu</a>
                            </div>
                            <div class="card-footer">
                                <div class="card-footer-item">
                                    <a href="" class="button is-primary is-fullwidth">Attend</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="column is-3">
                        <div class="card">
                            <div class="card-image">
                                <figure class="image is-5by3">
                                    <img src="https://via.placeholder.com/1080" alt="Placeholder image">
                                </figure>
                            </div>
                            <div class="card-content">
                                <p class="is-size-7 has-text-primary is-uppercase">jan 23, 12:20 am</p>
                                <p class="has-text-grey-dark is-uppercase event-title">mechamorphis 2k20</p>
                                <a href="#" class="is-size-7 has-text-grey is-uppercase">
                                    kcg college of technology
                                </a>
                                <br/>
                                <a href="#" class="is-size-7 has-text-grey is-uppercase">Chennai</a>,
                                <a href="#" class="is-size-7 has-text-grey is-uppercase">Tamilnadu</a>
                            </div>
                            <div class="card-footer">
                                <div class="card-footer-item">
                                    <a href="" class="button is-primary is-fullwidth">Attend</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="column is-3">
                        <div class="card">
                            <div class="card-image">
                                <figure class="image is-5by3">
                                    <img src="https://via.placeholder.com/1080" alt="Placeholder image">
                                </figure>
                            </div>
                            <div class="card-content">
                                <p class="is-size-7 has-text-primary is-uppercase">jan 23, 12:20 am</p>
                                <p class="has-text-grey-dark is-uppercase event-title">mechamorphis 2k20</p>
                                <a href="#" class="is-size-7 has-text-grey is-uppercase">
                                    kcg college of technology
                                </a>
                                <br/>
                                <a href="#" class="is-size-7 has-text-grey is-uppercase">Chennai</a>,
                                <a href="#" class="is-size-7 has-text-grey is-uppercase">Tamilnadu</a>
                            </div>
                            <div class="card-footer">
                                <div class="card-footer-item">
                                    <a href="" class="button is-primary is-fullwidth">Attend</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="column is-3">
                        <div class="card">
                            <div class="card-image">
                                <figure class="image is-5by3">
                                    <img src="https://via.placeholder.com/1080" alt="Placeholder image">
                                </figure>
                            </div>
                            <div class="card-content">
                                <p class="is-size-7 has-text-primary is-uppercase">jan 23, 12:20 am</p>
                                <p class="has-text-grey-dark is-uppercase event-title">mechamorphis 2k20</p>
                                <a href="#" class="is-size-7 has-text-grey is-uppercase">
                                    kcg college of technology
                                </a>
                                <br/>
                                <a href="#" class="is-size-7 has-text-grey is-uppercase">Chennai</a>,
                                <a href="#" class="is-size-7 has-text-grey is-uppercase">Tamilnadu</a>
                            </div>
                            <div class="card-footer">
                                <div class="card-footer-item">
                                    <a href="" class="button is-primary is-fullwidth">Attend</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="is-pulled-right">
                    <a href="#" class="is-info">...load more events</a>
                </div>
            </div>
        </section>
        <section class="section">
            <div class="container">
                <div class="has-margin-2">
                    <span class="is-size-4 has-text-grey-light">Events in your state...</span>
                </div>
                <div class="columns">
                    <div class="column is-3">
                        <div class="card">
                            <div class="card-image">
                                <figure class="image is-5by3">
                                    <img src="https://via.placeholder.com/1080" alt="Placeholder image">
                                </figure>
                            </div>
                            <div class="card-content">
                                <p class="is-size-7 has-text-primary is-uppercase">jan 23, 12:20 am</p>
                                <p class="has-text-grey-dark is-uppercase event-title">mechamorphis 2k20</p>
                                <a href="#" class="is-size-7 has-text-grey is-uppercase">
                                    kcg college of technology
                                </a>
                                <br/>
                                <a href="#" class="is-size-7 has-text-grey is-uppercase">Chennai</a>,
                                <a href="#" class="is-size-7 has-text-grey is-uppercase">Tamilnadu</a>
                            </div>
                            <div class="card-footer">
                                <div class="card-footer-item">
                                    <a href="" class="button is-primary is-fullwidth">Attend</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="column is-3">
                        <div class="card">
                            <div class="card-image">
                                <figure class="image is-5by3">
                                    <img src="https://via.placeholder.com/1080" alt="Placeholder image">
                                </figure>
                            </div>
                            <div class="card-content">
                                <p class="is-size-7 has-text-primary is-uppercase">jan 23, 12:20 am</p>
                                <p class="has-text-grey-dark is-uppercase event-title">mechamorphis 2k20</p>
                                <a href="#" class="is-size-7 has-text-grey is-uppercase">
                                    kcg college of technology
                                </a>
                                <br/>
                                <a href="#" class="is-size-7 has-text-grey is-uppercase">Chennai</a>,
                                <a href="#" class="is-size-7 has-text-grey is-uppercase">Tamilnadu</a>
                            </div>
                            <div class="card-footer">
                                <div class="card-footer-item">
                                    <a href="" class="button is-primary is-fullwidth">Attend</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="column is-3">
                        <div class="card">
                            <div class="card-image">
                                <figure class="image is-5by3">
                                    <img src="https://via.placeholder.com/1080" alt="Placeholder image">
                                </figure>
                            </div>
                            <div class="card-content">
                                <p class="is-size-7 has-text-primary is-uppercase">jan 23, 12:20 am</p>
                                <p class="has-text-grey-dark is-uppercase event-title">mechamorphis 2k20</p>
                                <a href="#" class="is-size-7 has-text-grey is-uppercase">
                                    kcg college of technology
                                </a>
                                <br/>
                                <a href="#" class="is-size-7 has-text-grey is-uppercase">Chennai</a>,
                                <a href="#" class="is-size-7 has-text-grey is-uppercase">Tamilnadu</a>
                            </div>
                            <div class="card-footer">
                                <div class="card-footer-item">
                                    <a href="" class="button is-primary is-fullwidth">Attend</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="column is-3">
                        <div class="card">
                            <div class="card-image">
                                <figure class="image is-5by3">
                                    <img src="https://via.placeholder.com/1080" alt="Placeholder image">
                                </figure>
                            </div>
                            <div class="card-content">
                                <p class="is-size-7 has-text-primary is-uppercase">jan 23, 12:20 am</p>
                                <p class="has-text-grey-dark is-uppercase event-title">mechamorphis 2k20</p>
                                <a href="#" class="is-size-7 has-text-grey is-uppercase">
                                    kcg college of technology
                                </a>
                                <br/>
                                <a href="#" class="is-size-7 has-text-grey is-uppercase">Chennai</a>,
                                <a href="#" class="is-size-7 has-text-grey is-uppercase">Tamilnadu</a>
                            </div>
                            <div class="card-footer">
                                <div class="card-footer-item">
                                    <a href="" class="button is-primary is-fullwidth">Attend</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="is-pulled-right">
                    <a href="#" class="is-info">...load more events</a>
                </div>
            </div>
        </section>
        <section class="section">
            <div class="container">
                <div class="has-margin-2">
                    <span class="is-size-4 has-text-grey-light">Events all over India...</span>
                </div>
                <div class="columns">
                    <div class="column is-3">
                        <div class="card">
                            <div class="card-image">
                                <figure class="image is-5by3">
                                    <img src="https://via.placeholder.com/1080" alt="Placeholder image">
                                </figure>
                            </div>
                            <div class="card-content">
                                <p class="is-size-7 has-text-primary is-uppercase">jan 23, 12:20 am</p>
                                <p class="has-text-grey-dark is-uppercase event-title">mechamorphis 2k20</p>
                                <a href="#" class="is-size-7 has-text-grey is-uppercase">
                                    kcg college of technology
                                </a>
                                <br/>
                                <a href="#" class="is-size-7 has-text-grey is-uppercase">Chennai</a>,
                                <a href="#" class="is-size-7 has-text-grey is-uppercase">Tamilnadu</a>
                            </div>
                            <div class="card-footer">
                                <div class="card-footer-item">
                                    <a href="" class="button is-primary is-fullwidth">Attend</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="column is-3">
                        <div class="card">
                            <div class="card-image">
                                <figure class="image is-5by3">
                                    <img src="https://via.placeholder.com/1080" alt="Placeholder image">
                                </figure>
                            </div>
                            <div class="card-content">
                                <p class="is-size-7 has-text-primary is-uppercase">jan 23, 12:20 am</p>
                                <p class="has-text-grey-dark is-uppercase event-title">mechamorphis 2k20</p>
                                <a href="#" class="is-size-7 has-text-grey is-uppercase">
                                    kcg college of technology
                                </a>
                                <br/>
                                <a href="#" class="is-size-7 has-text-grey is-uppercase">Chennai</a>,
                                <a href="#" class="is-size-7 has-text-grey is-uppercase">Tamilnadu</a>
                            </div>
                            <div class="card-footer">
                                <div class="card-footer-item">
                                    <a href="" class="button is-primary is-fullwidth">Attend</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="column is-3">
                        <div class="card">
                            <div class="card-image">
                                <figure class="image is-5by3">
                                    <img src="https://via.placeholder.com/1080" alt="Placeholder image">
                                </figure>
                            </div>
                            <div class="card-content">
                                <p class="is-size-7 has-text-primary is-uppercase">jan 23, 12:20 am</p>
                                <p class="has-text-grey-dark is-uppercase event-title">mechamorphis 2k20</p>
                                <a href="#" class="is-size-7 has-text-grey is-uppercase">
                                    kcg college of technology
                                </a>
                                <br/>
                                <a href="#" class="is-size-7 has-text-grey is-uppercase">Chennai</a>,
                                <a href="#" class="is-size-7 has-text-grey is-uppercase">Tamilnadu</a>
                            </div>
                            <div class="card-footer">
                                <div class="card-footer-item">
                                    <a href="" class="button is-primary is-fullwidth">Attend</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="column is-3">
                        <div class="card">
                            <div class="card-image">
                                <figure class="image is-5by3">
                                    <img src="https://via.placeholder.com/1080" alt="Placeholder image">
                                </figure>
                            </div>
                            <div class="card-content">
                                <p class="is-size-7 has-text-primary is-uppercase">jan 23, 12:20 am</p>
                                <p class="has-text-grey-dark is-uppercase event-title">mechamorphis 2k20</p>
                                <a href="#" class="is-size-7 has-text-grey is-uppercase">
                                    kcg college of technology
                                </a>
                                <br/>
                                <a href="#" class="is-size-7 has-text-grey is-uppercase">Chennai</a>,
                                <a href="#" class="is-size-7 has-text-grey is-uppercase">Tamilnadu</a>
                            </div>
                            <div class="card-footer">
                                <div class="card-footer-item">
                                    <a href="" class="button is-primary is-fullwidth">Attend</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="is-pulled-right">
                    <a href="#" class="is-info">...load more events</a>
                </div>
            </div>
        </section>
        <script src="{{ asset('js/app.js') }}" defer></script>
    </body>
</html>
