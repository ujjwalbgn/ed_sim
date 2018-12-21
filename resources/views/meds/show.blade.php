@extends('layout.adminLayout')
@section('pageTitle', 'View med - ')
@include('layout.adminMenu')

@section('content')
    <h1 class="title">{{$med->name}}</h1><div class="buttons">

    <form>
        <a class="button is-link" href="/meds/{{$med->id}}/edit">
            <strong>Edit</strong>
        </a>
        <fieldset disabled>
            <legend>View Only</legend>
            <section class="section">
                <div class="container">
    @include('meds.form')
                </div></section>
        </fieldset>

    </form>
@endsection
