@extends('layout.adminLayout')
@section('pageTitle', 'All Medication List - ')
@extends('layout.adminMenu')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 col-lg-12">
            <h1 class="title">Signature List</h1>
            @include('layout.errors')
        </div>
        <div class="col-md-12 col-lg-12">
            @if(isset($signatures))
            <table class="table table-hover text-nowrap">
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
                        <td>{{$index+1}}</td>
                        {{-- (+1) beacuse $index starts from 0 --}}
                        <td>
                            <a href="/signature/{{$signature->id}}">
                                {{$signature->initials}}
                            </a></td>
                        <td>
                            {{$signature->printName}}
                        </td>
                        <td>
                            <a href="/signature/{{$signature->id}}">
                                <button type="button" class="btn btn-success btn-indigo btn-sm my-0 btn-block"><i class="fa fa-sticky-note-o fa-sm pr-2" aria-hidden="true"></i>View / Edit</button>
                            </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            @else
                No Signature Found
            @endif
        </div>
    </div>
</div>
    @endsection
