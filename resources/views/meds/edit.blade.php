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
            <!-- <div class="container"> -->
                    @include('meds.form')
            <!-- </div> -->
            <div class="field">
                <div class="control">
                    <button type="submit" class="btn btn-success">Update med</button>
                    <a class="btn btn-secondary" href="/meds">Cancel Changes</a>
                </div>
            </div>
    </form>
        <form method="post" action="/meds/{{$med->id}}">
            @method('DELETE')
            @csrf
            <div class="field">
                <div class="control">
                    <button type="submit" class="btn btn-danger">Delete Medication</button>
                </div>
            </div>
        </form>
    </div>
@endsection
