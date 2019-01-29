@extends('layout.adminLayout')
@section('pageTitle', 'All Patients List - ')
@extends('layout.adminMenu')

@section('content')

    <h1 class="title">Select the you would like to assign to {{$patient->name}}</h1>
    @include('layout.errors')
    <div>
        @foreach($signatures as $signature)
            <div>
                <form method="post" action="/patients/{{$patient->id}}/signature/{{$signature->id}}">
                    @method('PATCH')
                    @csrf
                    <label class="checkbox" for="assigned">
                        <input type="checkbox" name="assigned" value="{{$signature->id}}" onchange="this.form.submit()">
                        {{$signature->printName}}
                    </label>
                </form>
            </div>
        @endforeach
    </div>
@endsection
