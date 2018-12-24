@extends('layout.adminLayout')
@section('pageTitle', 'All Patients List - ')
@extends('layout.adminMenu')

@section('content')
    <div class="container">
        <div class="content">
            <h1 class="title">All Patients</h1>
            @include('layout.errors')
            <div>
                @if(isset($patients))
                    @include('patients.patientTable')
                @else
                    No Patient Found in Database
                @endif
            </div>
        </div>
    </div>

@endsection
