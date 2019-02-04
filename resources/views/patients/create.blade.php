@extends('layout.adminLayout')
@include('layout.adminMenu')

@section('content')
    
    <div class="container-fluid">
        <div class="row">
            @include('layout.errors')
            <div class="col-md-12">
                <h1 class="title">Create a New Patient</h1>
            </div>
            <div class="col-md-12">
                <form method="POST" action="/patients">
                    @csrf
                    <br>
                    @include('patients.form')
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-success">Create Patient</button>
                                <button type="reset" value="Reset" class="btn btn-secondary">Cancel</button>
                            </div>
                        </div>
                    </div>
                    <br>
                </form>
            </div>
        </div>
    <div>
@endsection
