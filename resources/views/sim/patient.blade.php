@extends('layout.adminLayout')
@section('pageTitle', 'Patient`s Profile MAR Simulator')
@include('layout.simMenu')

@section('content')
    @include('layout.sessionMessage')
    <div class="content">
    <h1 class="title">Patient's Profile</h1>
        <div class="tags has-addons">
            <span class="tag is-large">Patient's Name</span>
            <span class="tag is-primary is-large">{{$patient->name}}</span>
        </div>
               <div class="tags has-addons">
            <span class="tag is-medium">Date of Birth</span>
            <span class="tag is-primary is-medium">{{$patient->dob}}</span>
        </div>
        <div class="tags has-addons">
            <span class="tag is-medium">Allergies</span>
            <span class="tag  is-medium is-danger">{{$patient->allergies}}</span>
        </div>
    <strong>Patients Description:</strong><br>
    {{$patient->description}}
    <hr>
    <div class="columns">
        <div class="column">
            <h4 class="title is-4">Medication Assigned</h4>
        </div><div class="column">
            @include('layout.errors')
            <form method="post" action="/sim/patient/{{$patient->id}}/med" style="margin-bottom: 1em">
                @csrf
            <input class="input is-large {{$errors->has('level') ? 'is-danger' : ''}}" type="text" name="barcode" placeholder="Scanner Medication Barcode" required>
            </form>
        </div>
        </div>
    <table class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth">
        <thead>
        <tr>
            <th>
                No.
            </th>
            <th>
                Medication Name
            </th>
            <th>
                Time
            </th>
            <th>Description</th>

        </tr>
        </thead>
        <tbody>
        @foreach($meds as $index => $med)
            <tr>
                <th>{{$index+1}}</th>{{-- (+1) beacuse $index starts from 0 --}}
                <th>
                {{$med->name}}
                </th>
                <th>
                    {{$med->time}}
                </th>
                <th>
                    {{$med->description}}
                </th>
            </tr>
        </tbody>
        @endforeach
    </table>
    </div>

@endsection
