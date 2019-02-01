@extends('layout.adminLayout')
@section('pageTitle', 'All Users List - ')
@extends('layout.adminMenu')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="content">
            <h1 class="title">All Users</h1> 
            <p>
            <a href="/register">
                <button class="btn btn-success">Register New User</button>
            </a>
            <a href="/roles">
                <button class="btn btn-info">Manage Roles</button>
            </a>
            </p>
            @include('users.userTabel')
        </div>
    </div>
</div>
@endsection
