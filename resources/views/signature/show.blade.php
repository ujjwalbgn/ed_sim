@extends('layout.adminLayout')
@section('pageTitle', 'View signature - ')
@include('layout.adminMenu')

@section('content')
    <form>
        <a class="btn btn-success" href="/signature/{{$signature->id}}/edit">
            <strong>Edit</strong>
        </a>
        <fieldset disabled>
            <legend>View Only</legend>
                <section class="section">
                    <div class="container">
                        @include('signature.form')
                    </div>
                </section>
        </fieldset>
    </form>
@endsection
