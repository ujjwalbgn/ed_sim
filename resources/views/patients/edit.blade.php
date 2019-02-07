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
            <div class="col-md-12">
                    @include('patients.form')
            </div>
            <div class="col-md-12">
                <div class="text-center">
                    <button type="submit" class="btn btn-success">Update Patient</button>
                    <a class="btn btn-secondary" href="/patients">Cancel Changes</a>
                </div>
            </div>
    </form>
        <form method="post" action="/patients/{{$patient->id}}">
            @method('DELETE')
            @csrf
            {{--<!-- <div class="field"> -->--}}
                <div class="text-center">
                    <button type="submit" class="btn btn-danger">Delete Patient</button>
                </div>
            {{--<!-- </div> -->--}}
        </form>
    </div>
@endsection
