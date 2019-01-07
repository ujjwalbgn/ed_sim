@extends('layout.adminLayout')
@section('pageTitle', 'All Users List - ')
@extends('layout.adminMenu')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="content">
            <h1 class="title">All Users</h1> 
            <p>
            <a class="button is-link" href="/register">
                <strong>Register New User</strong>
            </a>
           
            <a class="button is-link" href="/roles">
                <strong>Manage Roles</strong>
            </a>
            </p><br>
            @include('users.userTabel')
        </div>
    </div>
</div>
@endsection
