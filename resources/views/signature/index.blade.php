@extends('layout.adminLayout')
@section('pageTitle', 'All Medication List - ')
@extends('layout.adminMenu')

@section('content')
    <h1 class="title">Signature List</h1>
    @include('layout.errors')

    @if(isset($signatures))
    <table class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth">
        <thead>
        <tr>
            <th>
                No.
            </th>
            <th>
                Initials
            </th>
            <th>
                Print Name
            </th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @foreach($signatures as $index => $signature)
            <tr>
                <th>{{$index+1}}</th>{{-- (+1) beacuse $index starts from 0 --}}
                <th><a href="/signature/{{$signature->id}}">
                        {{$signature->initials}}
                    </a></th>
                <th>
                    {{$signature->printName}}
                </th>
                <th><a href="/signature/{{$signature->id}}">View / Edit</a></th>
            </tr>
        </tbody>
        @endforeach
    </table>


    @else
        No Signature Found
            @endif
    @endsection
