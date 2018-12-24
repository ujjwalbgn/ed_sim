@extends('layout.adminLayout')
@section('content')
<section class="hero is-fullheight">
    <div class="hero-body">
        <div class="container has-text-centered">
            <div class="column is-6 is-offset-3">
                <h1 class="title">
                    Welcome to EdSime
                </h1>
                <h2 class="subtitle">

                </h2>
                <div class="box">
                    <div class="field is-grouped">

                        <p class="control"> <a class="button is-info" href="/patients">
                                Setup
                            </a></p>
                            <p class="control"> <a class="button is-info" href="/users">
                                    Users
                                </a></p>
                        <p class="control">
                            <a class="button" href="/sim">
                                Simulator
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
@endsection
