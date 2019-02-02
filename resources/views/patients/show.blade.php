@extends('layout.adminLayout')
@section('pageTitle', 'View Patient - ')
@include('layout.adminMenu')

@section('content')
    <h1 class="title">{{$patient->name}}</h1>
    
    <div class="container-fluid">
        <div class="row">
            <form>
                <a class="btn btn-success" href="/patients/{{$patient->id}}/edit">
                    <strong>Edit Patient</strong>
                </a>
                <fieldset disabled>
                    <legend>View Only</legend>
                            @include('patients.form')
                </fieldset>
            </form>

            {{--List of Meds Assigned to patients--}}
            @include('patients.showPatientMeds')
            @include('patients.showPatientSignature')
        </div>
    </div>
@endsection
