@extends('layout.adminLayout')
@section('pageTitle', 'View med - ')
@include('layout.adminMenu')

@section('content')
    <h1 class="title">Edit: {{$med->name}}</h1>

    @include('layout.errors')

    <div class="container is-fluid">
        <form method="post" action="/meds/{{$med->id}}" style="margin-bottom: 1em">
            @method('PATCH')
            @csrf
            <div class="container">
                    @include('meds.form')
                </div>
            <div class="field">
                <div class="control">
                    <button type="submit" class="button is-link">Update med</button>
                    <a class="button is-danger" href="/meds">Cancel Changes</a>
                </div>
            </div>
    </form>
        <form method="post" action="/meds/{{$med->id}}">
            @method('DELETE')
            @csrf
            <div class="field">
                <div class="control">
                    <button type="submit" class="button is-dark">Delete Medication</button>
                </div>
            </div>
        </form>
    </div>
@endsection
