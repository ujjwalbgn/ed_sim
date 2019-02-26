@extends('layout.adminLayout')
@section('pageTitle', 'Patient`s Profile MAR Simulator')
@include('layout.simMenu')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <br>
                @include('layout.sessionMessage')
            </div>
        </div>
    </div>
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
                            <span class="">
                            <input class="input is-large {{$errors->has('level') ? 'is-danger' : ''}} border border-primary" type="text" name="barcode" placeholder="   Scanner Medication Barcode" required autofocus="autofocus">
                        </span>
                        </form>
                    </div>
                </div>
            </div>
        </div><br>
        <div class="row">
            <div class="col-lg-12">
                <h5 class="is-5">Scheduled Medication</h5>
                <table class="table table-hover">
                    <thead class="table-active">
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
                        <th style="background-color:#d2d2d2;" scope="col">
                            Yesterday
                        </th>
                        <th scope="col">
                            Today
                        </th>
                        <th scope="col">
                            Tomorrow
                        </th>
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
                            <td style="background-color:#d2d2d2;">
                                <em>{{$scheduledMeds->timeYesterday}}</em>
                            </td>
                            <td>
                                <em>{{$scheduledMeds->timeToday}}</em>
                            </td>
                            <td>
                                <em>{{$scheduledMeds->timeTomorrow}}</em>
                            </td>
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
                    <thead class='table-active'>
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
                        <th style="background-color:#d2d2d2;" scope="col">
                            Yesterday
                        </th>
                        <th scope="col">
                            Today
                        </th>
                        <th scope="col">
                            Tomorrow
                        </th>
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
                            <td style="background-color:#d2d2d2;">
                                {{$prnMeds->timeYesterday}}
                            </td>
                            <td>
                                {{$prnMeds->timeToday}}
                            </td>
                            <td>
                                {{$prnMeds->timeTomorrow}}
                            </td>
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
                    <h5 class="is-5">Signatures</h5>
                    <table class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth">
                        <thead class='table-active'>
                        <tr>
                            <th>Initials</th>
                            <th>Print Name</th>
                            <th>Signature</th>
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
                                <td><div class="sign">
                                        {{$signature->signature}}
                                    </div>
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
@endsection
