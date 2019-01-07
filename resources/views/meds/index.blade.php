@extends('layout.adminLayout')
@section('pageTitle', 'All Medication List - ')
@extends('layout.adminMenu')

@section('content')
    <h1 class="title">Medication List</h1>
    @include('layout.errors')

    @if(isset($meds))
    <table class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth">
        <thead>
        <tr>
            <th>
                No.
            </th>
            <th>
                Name
            </th>
            <th>
                Med Time
            </th>
            <th>
                Barcode
            </th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @foreach($meds as $index => $med)
            <tr>
                <th>{{$index+1}}</th>{{-- (+1) beacuse $index starts from 0 --}}
                <th><a href="/meds/{{$med->id}}">
                        {{$med->name}}
                    </a></th>
                <th>
                    {{$med->time}}
                </th>
                <th>
                    {{$med->barcode}}
                </th>
                <th><a href="/meds/{{$med->id}}">View / Edit</a></th>
            </tr>
        </tbody>
        @endforeach
    </table>


    @else
        No Medication Found
            @endif
    @endsection
