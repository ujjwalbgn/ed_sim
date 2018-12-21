@extends('layout.adminLayout')
@section('pageTitle', 'All Patients List - ')
@extends('layout.adminMenu')

@section('content')

    <h1 class="title">Select the you would like to assign to {{$patient->name}}</h1>
    @include('layout.errors')
    <div>
        @foreach($meds as $med)
            <div>
                <form method="post" action="/patients/{{$patient->id}}/med/{{$med->id}}">
                    @method('PATCH')
                    @csrf
                    <label class="checkbox" for="assigned">
                        <input type="checkbox" name="assigned" value="{{$med->id}}" onchange="this.form.submit()">
                        {{$med->name}}
                    </label>
                </form>
            </div>
        @endforeach
    </div>
@endsection
