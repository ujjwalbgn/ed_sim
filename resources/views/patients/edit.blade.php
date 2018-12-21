@extends('layout.adminLayout')
@section('pageTitle', 'View Patient - ')
@include('layout.adminMenu')

@section('content')
    <h1 class="title">Edit: {{$patient->name}}</h1>

    @include('layout.errors')

    <div class="container is-fluid">
        <form method="post" action="/patients/{{$patient->id}}" style="margin-bottom: 1em">
            @method('PATCH')
            @csrf
            <div class="container">
                    @include('patients.form')
                </div>
            <div class="field">
                <div class="control">
                    <button type="submit" class="button is-link">Update Patient</button>
                    <a class="button is-danger" href="/patients">Cancel Changes</a>
                </div>
            </div>
    </form>
        <form method="post" action="/patients/{{$patient->id}}">
            @method('DELETE')
            @csrf
            <div class="field">
                <div class="control">
                    <button type="submit" class="button is-dark">Delete Patient</button>
                </div>
            </div>
        </form>
    </div>
@endsection
