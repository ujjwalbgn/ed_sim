@extends('layout.adminLayout')
@section('pageTitle', 'Patient`s Profile MAR Simulator')
@include('layout.simMenu')

@section('content')
    @include('layout.sessionMessage')
<!-- ******************************************************************************************** -->
<br>
    <div class="container">
        <div class="row">
  		    <div class="col-lg-12">  
                <h5 class="title">Patient's Profile</h5>
            </div>
            <div class="col-lg-12"><em>
                <h2>{{$patient->name}}</h2></em>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-4">
                <div class="row">
                    <div class="col-lg-12">
                        <ul class="list-group">
                            <li class="list-group-item text-right"><span class="pull-left"><strong>Date of Birth :</strong></span> <em>{{$patient->dob}}</em></li>
                            <li class="list-group-item text-right"><span class="pull-left"><strong>Age :</strong></span> <em>{{$patient->age}}</em></li>
                            <li class="list-group-item text-right"><span class="pull-left"><strong>Gender :</strong></span> <em>{{$patient->gender}}</em></li>
                            <li class="list-group-item text-right"><span class="pull-left"><strong>Height :</strong></span> <em>{{$patient->height}}</em></li>
                            <li class="list-group-item text-right"><span class="pull-left"><strong>Weight :</strong></span> <em>{{$patient->weight}}</em></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-8">
                <div class="row">
                    <div class="col-lg-12">
                        <ul class="list-group">
                            <li class="list-group-item text-right"><span class="pull-left"><strong>MR# :</strong></span> <em>{{$patient->barcode}}</em></li>
                            <li class="list-group-item text-right"><span class="pull-left"><strong>Diagnosis :</strong></span>  <em>{{$patient->diagnosis}}</em></li>
                            <li class="list-group-item text-right"><span class="pull-left"><strong>Provider :</strong></span> <em>{{$patient->provider}}</em></li>
                            <li class="list-group-item text-right"><span class="pull-left"><strong>Know Allergies :</strong></span> <em>{{$patient->allergies}}</em></li>
                            <li class="list-group-item text-right"><span class="pull-left"><strong>Know Sensitivity :</strong></span> <em>{{$patient->sensitivity}}</em></li>
                            {{--<div class="tags has-addons">--}}
                                {{--<span class="tag is-medium">Allergies</span>--}}
                                {{--<span class="tag  is-medium is-danger">{{$patient->allergies}}</span>--}}
                            {{--</div>--}}
                            {{--<strong>Patients Description:</strong><br>--}}
                            {{$patient->description}}
                        </ul>
                    </div>
                </div>
            </div>
        </div><br>
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-6">
                    <h4>Medication Assigned</h4>
                    </div>
                    <div class="col-6">
                    @include('layout.errors')
                    <form method="post" action="/sim/patient/{{$patient->id}}/med" style="margin-bottom: 1em">
                        @csrf
                        <input class="input is-large {{$errors->has('level') ? 'is-danger' : ''}}" type="text" name="barcode" placeholder="Scanner Medication Barcode" required>
                    </form>
                    </div>
                </div>
            </div>
        </div><br>
        <div class="row">
            <div class="col-lg-12">
                <h5 class="is-5">Scheduled Medication</h5>
                <table class="table table-hover">
                    <thead>
                    <tr>
                        {{--<th scope="col">--}}
                        {{--No.--}}
                        {{--</th>--}}
                        <th scope="col">
                            Date/Time RN Verified
                        </th>
                        <th scope="col">
                            Medication
                        </th>
                        <th bgcolor="gray" scope="col">
                            Yesterday
                        </th>
                        <th scope="col">
                            Today
                        </th>
                        <th scope="col">
                            Tomorrow
                        </th>
                        {{--<th scope="col">Description</th>--}}
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($scheduledMeds as $index => $scheduledMeds)
                        <tr>
                            {{--<th>{{$index+1}}</th>--}}{{-- (+1) beacuse $index starts from 0 --}}
                            <th scope="row"><em>{{$scheduledMeds->dateTimeRNVerified}}</em></th>
                            <td>
                                {{$scheduledMeds->name}}
                                <div class="content is-small">
                                    {{$scheduledMeds->description}}
                                </div>
                            </td>
                            <td bgcolor="gray">
                            <em>{{$scheduledMeds->timeYesterday}}</em>
                            </td>
                            <td>
                                <em>{{$scheduledMeds->timeToday}}</em>
                            </td>
                            <td>
                            <em>{{$scheduledMeds->timeTomorrow}}</em>
                            </td>
                            {{--<td><em>--}}
                            {{--{{$med->description}}--}}
                            {{--</em></td>--}}
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        
        <div class="row">
            <div class="col-lg-12">
                <h5 class="is-5">PRN Medication</h5>
                <table class="table table-hover">
                    <thead>
                    <tr>
                        {{--<th scope="col">--}}
                        {{--No.--}}
                        {{--</th>--}}
                        <th scope="col">
                            Date/Time RN Verified
                        </th>
                        <th scope="col">
                            Medication
                        </th>
                        <th bgcolor="gray" scope="col">
                            Yesterday
                        </th>
                        <th scope="col">
                            Today
                        </th>
                        <th scope="col">
                            Tomorrow
                        </th>
                        {{--<th scope="col">Description</th>--}}

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($prnMeds as $index => $prnMeds)
                        <tr>
                            {{--<th>{{$index+1}}</th>--}}{{-- (+1) beacuse $index starts from 0 --}}
                            <th>{{$prnMeds->dateTimeRNVerified}}</th>
                            <td>
                                {{$prnMeds->name}}
                                <div class="content is-small">
                                    {{$prnMeds->description}}
                                </div>
                            </td>
                            <td bgcolor="gray">
                                {{$prnMeds->timeYesterday}}
                            </td>
                            <td>
                                {{$prnMeds->timeToday}}
                            </td>
                            <td>
                                {{$prnMeds->timeTomorrow}}
                            </td>
                            {{--<td>--}}
                            {{--{{$med->description}}--}}
                            {{--</td>--}}
                        </tr>
                    </tbody>
                    @endforeach
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                
        @if(isset($signatures))
            <hr>
        Signatures
            <table class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth">
                <thead>
                <tr>
                    <th>Initials</th>
                    <th>Print Name</th>
                </tr>
                </thead>
                <tbody>
                @foreach($signatures as$signature)

                    <tr>
                    <td>
                        <em>{{$signature->initials}}</em>
                    </td>
                    <td>
                        {{$signature->printName}}
                    </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        @endif
    </div>
    <br>
    <br>
    <br>
            </div>
        </div>
    </div>
    <!-- *********************************************************************************** -->
        {{--<!-- <div class="content is-small">--}}
        {{--<h1 class="title">Patient's Profile</h1>--}}
        {{--<table class="table is-narrow is-hoverable is-fullwidth">--}}
            {{--<thead>--}}
            {{--<tr>--}}
                {{--<th>--}}
                    {{--<h3 class="">Patient's Name: {{$patient->name}}</h3>--}}
                {{--</th>--}}
                {{--<th>Diagnosis: {{$patient->diagnosis}}</th>--}}
            {{--</tr>--}}
            {{--<tr>--}}
                {{--<th>MR# : {{$patient->barcode}}</th>--}}
                {{--<th>Provider: {{$patient->provider}}</th>--}}
            {{--</tr>--}}
            {{--</thead>--}}
        {{--</table>--}}
        {{--<table>--}}
            {{--<tr>--}}
                {{--<th>Date of Birth: {{$patient->dob}}</th>--}}
                {{--<th>Age: {{$patient->age}}</th>--}}
                {{--<th>Gender: {{$patient->gender}}</th>--}}
                {{--<th>Height: {{$patient->height}}</th>--}}
                {{--<th>Weight: {{$patient->weight}}</th>--}}
            {{--</tr>--}}
        {{--</table>--}}
        {{--<hr>--}}
        {{--<table>--}}
            {{--<tr><th>Know Allergies: {{$patient->allergies}}</th>--}}
                {{--<th>Know Sensitivity: {{$patient->sensitivity}}</th></tr>--}}

        {{--</table>--}}
        {{--<div class="tags has-addons">--}}
        {{--<span class="tag is-medium">Allergies</span>--}}
        {{--<span class="tag  is-medium is-danger">{{$patient->allergies}}</span>--}}
        {{--</div>--}}
        {{--<strong>Patients Description:</strong><br>--}}
        {{--{{$patient->description}}--}}
        {{--<hr>--}}
        {{--<div class="columns">--}}
            {{--<div class="column">--}}
                {{--<h4 class="title is-4">Medication Assigned</h4>--}}
            {{--</div><div class="column">--}}
                {{--@include('layout.errors')--}}
                {{--<form method="post" action="/sim/patient/{{$patient->id}}/med" style="margin-bottom: 1em">--}}
                    {{--@csrf--}}
                    {{--<input class="input is-large {{$errors->has('level') ? 'is-danger' : ''}}" type="text" name="barcode" placeholder="Scanner Medication Barcode" required>--}}
                {{--</form>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<h5 class="is-5">Scheduled Medication</h5>--}}
        {{--<table class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth">--}}
            {{--<thead>--}}
            {{--<tr>--}}
                {{--<th>--}}
                {{--No.--}}
                {{--</th>--}}
                {{--<th>--}}
                    {{--Date/Time RN Verified--}}
                {{--</th>--}}
                {{--<th>--}}
                    {{--Medication--}}
                {{--</th>--}}
                {{--<th bgcolor="gray">--}}
                    {{--Yesterday--}}
                {{--</th>--}}
                {{--<th>--}}
                    {{--Today--}}
                {{--</th>--}}
                {{--<th>--}}
                    {{--Tomorrow--}}
                {{--</th>--}}
                {{--<th>Description</th>--}}

            {{--</tr>--}}
            {{--</thead>--}}
            {{--<tbody>--}}
            {{--@foreach($scheduledMeds as $index => $scheduledMeds)--}}
                {{--<tr>--}}
                    {{--<th>{{$index+1}}</th>--}}{{----}}{{-- (+1) beacuse $index starts from 0 --}}
                    {{--<th>{{$scheduledMeds->dateTimeRNVerified}}</th>--}}
                    {{--<th>--}}
                        {{--{{$scheduledMeds->name}}--}}
                        {{--<div class="content is-small">--}}
                            {{--{{$scheduledMeds->description}}--}}
                        {{--</div>--}}
                    {{--</th>--}}
                    {{--<th bgcolor="gray">--}}
                        {{--{{$scheduledMeds->timeYesterday}}--}}
                    {{--</th>--}}
                    {{--<th>--}}
                        {{--{{$scheduledMeds->timeToday}}--}}
                    {{--</th>--}}
                    {{--<th>--}}
                        {{--{{$scheduledMeds->timeTomorrow}}--}}
                    {{--</th>--}}
                    {{--<th>--}}
                    {{--{{$med->description}}--}}
                    {{--</th>--}}
                {{--</tr>--}}
            {{--</tbody>--}}
            {{--@endforeach--}}
        {{--</table>--}}
        {{--<br>--}}
        {{--<h5 class="is-5">PRN Medication</h5>--}}
        {{--<table class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth">--}}
            {{--<thead>--}}
            {{--<tr>--}}
                {{--<th>--}}
                {{--No.--}}
                {{--</th>--}}
                {{--<th>--}}
                    {{--Date/Time RN Verified--}}
                {{--</th>--}}
                {{--<th>--}}
                    {{--Medication--}}
                {{--</th>--}}
                {{--<th bgcolor="gray">--}}
                    {{--Yesterday--}}
                {{--</th>--}}
                {{--<th>--}}
                    {{--Today--}}
                {{--</th>--}}
                {{--<th>--}}
                    {{--Tomorrow--}}
                {{--</th>--}}
                {{--<th>Description</th>--}}

            {{--</tr>--}}
            {{--</thead>--}}
            {{--<tbody>--}}
            {{--@foreach($prnMeds as $index => $prnMeds)--}}
                {{--<tr>--}}
                    {{--<th>{{$index+1}}</th>--}}{{----}}{{-- (+1) beacuse $index starts from 0 --}}
                    {{--<th>{{$prnMeds->dateTimeRNVerified}}</th>--}}
                    {{--<th>--}}
                        {{--{{$prnMeds->name}}--}}
                        {{--<div class="content is-small">--}}
                            {{--{{$prnMeds->description}}--}}
                        {{--</div>--}}
                    {{--</th>--}}
                    {{--<th bgcolor="gray">--}}
                        {{--{{$prnMeds->timeYesterday}}--}}
                    {{--</th>--}}
                    {{--<th>--}}
                        {{--{{$prnMeds->timeToday}}--}}
                    {{--</th>--}}
                    {{--<th>--}}
                        {{--{{$prnMeds->timeTomorrow}}--}}
                    {{--</th>--}}
                    {{--<th>--}}
                    {{--{{$med->description}}--}}
                    {{--</th>--}}
                {{--</tr>--}}
            {{--</tbody>--}}
            {{--@endforeach--}}
        {{--</table>--}}
        {{--@if(isset($signatures))--}}
            {{--<hr>--}}
        {{--Signatures--}}
            {{--<table class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth">--}}
                {{--<thead>--}}
                {{--<tr>--}}
                    {{--<th>Initials</th>--}}
                    {{--<th>Print Name</th>--}}
                {{--</tr>--}}
                {{--</thead>--}}
                {{--<tbody>--}}
                {{--@foreach($signatures as$signature)--}}

                    {{--<tr>--}}
                    {{--<th>--}}
                        {{--{{$signature->initials}}--}}
                    {{--</th>--}}
                    {{--<th>--}}
                        {{--{{$signature->printName}}--}}
                    {{--</th></tr>--}}
                    {{--@endforeach--}}

                {{--</tbody>--}}
            {{--</table>--}}
        {{--@endif--}}
    {{--</div>--}}
    {{---->--}}
@endsection
