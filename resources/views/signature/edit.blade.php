@extends('layout.adminLayout')
@section('pageTitle', 'View signature - ')
@include('layout.adminMenu')

@section('content')

    @include('layout.errors')

    <div class="container-fluid">
        <form method="post" action="/signature/{{$signature->id}}" style="margin-bottom: 1em">
            @method('PATCH')
            @csrf
            <div class="container">
                    @include('signature.form')
                </div>
            <div class="field">
                <div class="control">
                    <button type="submit" class="btn btn-success">Update signature</button>
                    <a class="btn btn-secondary" href="/signature">Cancel Changes</a>
                </div>
            </div>
    </form>
        <form method="post" action="/signature/{{$signature->id}}">
            @method('DELETE')
            @csrf
            <div class="field">
                <div class="control">
                    <button type="submit" class="btn btn-danger">Delete Signature</button>
                </div>
            </div>
        </form>
    </div>
@endsection
