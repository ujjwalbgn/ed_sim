@extends('layout.adminLayout')
@include('layout.adminMenu')

@section('content')
    <h1 class="title">Create a New Medication</h1>

    @include('layout.errors')
    <div class="container is-fluid">

    <Form method="POST" action="/meds">
        @csrf

        @include('meds.form')

        <div class="field">
            <p class="control">
                <button type="submit" class="button is-link">Create Medication</button>
                <button type="reset" value="Reset" class="button is-light">Cancel</button>
        </div>
    </Form>
    <div>
@endsection
