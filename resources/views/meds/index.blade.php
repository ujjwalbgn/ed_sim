@extends('layout.adminLayout')
@section('pageTitle', 'All Medication List - ')
@extends('layout.adminMenu')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 col-lg-12">
            <h1 class="title">Medication List</h1>
            @include('layout.errors')
        <div>
        <div class="col-md-12 col-lg-12">
            @if(isset($meds))
            <!-- <table class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth"> -->
            <table class="table table-striped table-hover">
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
                        <th>
                        </th>
                    </tr>
                </thead>
                
                <tbody>
                @foreach($meds as $index => $med)
                    <tr>
                        <td>{{$index+1}}</td>
                        {{-- (+1) beacuse $index starts from 0 --}}
                        <td>
                            <a href="/meds/{{$med->id}}">
                                {{$med->name}}
                            </a>
                        </td>
                        <td>
                            {{$med->time}}
                        </td>
                        <td>
                            {{$med->barcode}}
                        </td>
                        <td>
                            <a href="/meds/{{$med->id}}">
                                <button type="button" class="btn btn-success btn-indigo btn-sm my-0 btn-block"><i class="fa fa-sticky-note-o fa-sm pr-2" aria-hidden="true"></i>View / Edit</button>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
               
            </table>
            @else
                No Medication Found
            @endif
        </div>
    </div>
</div>
@endsection
