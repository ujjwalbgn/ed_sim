@extends('layout.adminLayout')
@section('pageTitle', 'All Patients List - ')
@extends('layout.adminMenu')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <h1 class="title">All Patients</h1>
                @include('layout.errors')
            </div>
            <div class="col-md-12 col-lg-12">
                @if(isset($patients))
                    @include('patients.patientTable')
                @else
                    No Patient Found in Database
                @endif
            </div>
        </div>
    </div>

@endsection
