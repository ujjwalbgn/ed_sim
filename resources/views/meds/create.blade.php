@extends('layout.adminLayout')
@include('layout.adminMenu')

@section('content')
    <h1 class="title">Create a New Medication</h1>

    @include('layout.errors')
    <div class="container-fluid">

    <form method="POST" action="/meds">
        @csrf

        @include('meds.form')

        <div class="field">
            <p class="control">
                <button type="submit" class="btn btn-success">Create Medication</button>
                <button type="reset" value="Reset" class="btn btn-secondary">Cancel</button>
        </div>
    </form>
    <div>
@endsection
