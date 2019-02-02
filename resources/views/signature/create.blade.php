@extends('layout.adminLayout')
@include('layout.adminMenu')

@section('content')
    <div class="container">
        <div class="row">  
            <div class="col-md-12">
                <h1 class="title">Create a New Signature</h1>
            </div>
            <div class="col-md-12">
                @include('layout.errors')
                <div class="container is-fluid">

                <form method="POST" action="/signature">
                    @csrf

                    @include('signature.form')

                    <div class="field">
                        <p class="control">
                            <button type="submit" class="btn btn-success">Create Signature</button>
                            <button type="reset" value="Reset" class="btn btn-secondary">Cancel</button>
                    </div>
                </form>
                <div>
            </div>
        </div>
    </div>
</div>
@endsection
