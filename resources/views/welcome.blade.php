@extends('layout.adminLayout')
@section('content')
<section class="hero is-fullheight">
    <div class="hero-body">
        <div class="container has-text-centered">
            <div class="column">
                <h1 class="title">
                    Welcome to EdSime
                </h1>
                <h2 class="subtitle">
                    You are Logged in as
                    <strong>
                        @role('admin')
                            Admin
                                @else
                            @role('instructor')
                                Instructor
                                @else
                                @role('student')
                                Student
                                @else
                                    Guest
                                @endrole
                            @endrole
                        @endrole
                    </strong>
                </h2>

                        <div class="columns">
                            @role('admin')
                            <div class="column">
                                <a class="button is-info is-large" href="/users">
                                    Admin Control
                                </a>
                            </div>
                            @endrole
                            @hasanyrole('admin|instructor')
                            <div class="column">
                                <a class="button is-info is-large" href="/patients">
                                    Edit Patients and Medication
                                </a>
                            </div>
                            @endrole
                            <div class="column">
                                <a class="button is-primary is-large" href="/sim">
                                    Open Simulator
                                </a>
                            </div>
                        </div>
            </div>
        </div>
    </div>

</section>
@endsection
