@extends('layout.adminLayout')
@section('pageTitle', 'All Patients List - ')
@extends('layout.adminMenu')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Select the you would like to assign to {{$patient->name}}</h4></div>
                    @include('layout.errors')
                {{--<!-- <div> -->--}}
                    @foreach($meds as $med)
                        {{--<!-- <div> -->--}}
                            <form method="post" action="/patients/{{$patient->id}}/med/{{$med->id}}">
                                @method('PATCH')
                                @csrf
                                <label class="checkbox" for="assigned">
                                    <input type="checkbox" name="assigned" value="{{$med->id}}" onchange="this.form.submit()">
                                    {{$med->name}}
                                </label>
                                </ul>
                            </form>
                        {{--<!-- </div> -->--}}
                    @endforeach
                {{--<!-- </div> -->--}}
            </div>
        </div>
        {{--<!-- col -->--}}
    </div>
    {{--<!-- row -->--}}
</div>
{{--<!-- container -->--}}
@endsection
