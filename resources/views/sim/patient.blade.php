@extends('layout.adminLayout')
@section('pageTitle', 'Patient`s Profile MAR Simulator')
@include('layout.simMenu')

@section('content')
    @include('layout.sessionMessage')
    <div class="content">
    <h1 class="title">Patient's Profile</h1>
        <table class="table is-narrow is-hoverable is-fullwidth">
            <thead>
            <tr>
            <th>
                  <h3 class="">Patient's Name: {{$patient->name}}</h3>
            </th>
               <th>Diagnosis: {{$patient->diagnosis}}</th>
            </tr>
            <tr>
                <th>MR# : {{$patient->barcode}}</th>
                <th>Provider: {{$patient->provider}}</th>
            </tr>
            </thead>
        </table>
        <table>
            <thead>
            <tr>
                <th>Date of Birth: {{$patient->dob}}</th>
                <th>Age: {{$patient->age}}</th>
                <th>Gender: {{$patient->gender}}</th>
                <th>Height: {{$patient->height}}</th>
                <th>Weight: {{$patient->weight}}</th>
            </tr>
            </thead>
        </table>
        {{--<div class="tags has-addons">--}}
            {{--<span class="tag is-medium">Allergies</span>--}}
            {{--<span class="tag  is-medium is-danger">{{$patient->allergies}}</span>--}}
        {{--</div>--}}
    {{--<strong>Patients Description:</strong><br>--}}
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
            {{--<th>--}}
                {{--No.--}}
            {{--</th>--}}
            <th>
                Date/Time RN Verified
            </th>
            <th>
                Scheduled Medication
            </th>
            <th bgcolor="gray">
                 Yesterday
            </th>
            <th>
                Today
            </th>
            <th>
                Tomorrow
            </th>
            {{--<th>Description</th>--}}

        </tr>
        </thead>
        <tbody>
        @foreach($meds as $index => $med)
            <tr>
                {{--<th>{{$index+1}}</th>--}}{{-- (+1) beacuse $index starts from 0 --}}
                <th>{{$med->dateTimeRNVerified}}</th>
                <th>
                {{$med->name}}
                    <div class="content is-small">
                    {{$med->description}}
                    </div>
                </th>
                <th bgcolor="gray">
                    {{$med->timeYesterday}}
                </th>
                <th>
                    {{$med->timeToday}}
                </th>
                <th>
                    {{$med->timeTomorrow}}
                </th>
                {{--<th>--}}
                    {{--{{$med->description}}--}}
                {{--</th>--}}
            </tr>
        </tbody>
        @endforeach
    </table>
    </div>
@endsection
