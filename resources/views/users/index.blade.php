@extends('layout.adminLayout')
@section('pageTitle', 'All Users List - ')
@extends('layout.adminMenu')

@section('content')
    <div class="container">
        <div class="content">
            <h1 class="title">All Users</h1>
            <a class="button is-link" href="/register">
                <strong>Register New User</strong>
            </a>
            @include('users.userTabel')
        </div>
    </div>
@endsection
