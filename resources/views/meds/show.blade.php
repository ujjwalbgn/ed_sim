@extends('layout.adminLayout')
@section('pageTitle', 'View med - ')
@include('layout.adminMenu')

@section('content')
    <h1 class="title">{{$med->name}}</h1><div class="buttons">
    
    <div class="container-fluid">
        <div class="row">
            <form>
                <a class="btn btn-success" href="/meds/{{$med->id}}/edit">
                    <strong>Edit</strong>
                </a>
                <fieldset disabled>
                    <legend>View Only</legend>
                        @include('meds.form')
                </fieldset>
            </form>
        </div>
    </div>
@endsection
