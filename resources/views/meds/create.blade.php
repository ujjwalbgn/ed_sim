@extends('layout.adminLayout')
@include('layout.adminMenu')

@section('content')
    {{--<h1 class="title">Create a New Medication</h1>--}}

    {{--@include('layout.errors')--}}
    {{--<div class="container-fluid">--}}

    {{--<form method="POST" action="/meds">--}}
        {{--@csrf--}}
        {{--@include('meds.form')--}}
        {{--<div class="container">--}}
            {{--<div class="row">--}}
                {{--<div class="col-md-12">--}}
                    {{--<button type="submit" class="btn btn-success">Create Medication</button>--}}
                    {{--<button type="reset" value="Reset" class="btn btn-secondary">Cancel</button>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</form>--}}
    {{--</div>--}}
    <div class="container-fluid">
        <div class="row">
            @include('layout.errors')
            <div class="col-md-12">
                <h1 class="title">Create a New Medication</h1>
            </div>
            <div class="col-md-12">
                <form method="POST" action="/meds">
                    @csrf
                    @include('meds.form')
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-success">Create Medication</button>
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
