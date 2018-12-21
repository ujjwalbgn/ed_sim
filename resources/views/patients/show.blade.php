@extends('layout.adminLayout')
@section('pageTitle', 'View Patient - ')
@include('layout.adminMenu')

@section('content')
    <h1 class="title">{{$patient->name}}</h1><div class="buttons">
    <div>
    <form>
        <a class="button is-link" href="/patients/{{$patient->id}}/edit">
            <strong>Edit Patient</strong>
        </a>

        <fieldset disabled>
            <legend>View Only</legend>
            <section class="section">
                <div class="container">
    @include('patients.form')
                </div></section>
        </fieldset>
    </form>

    {{--List of Meds Assigned to patients--}}
    @include('patients.showPatientMeds')
    </div>
@endsection
