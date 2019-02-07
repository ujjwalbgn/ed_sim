@extends('layout.adminLayout')
@section('pageTitle', 'All Patients List - ')
@extends('layout.adminMenu')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Select the you would like to assign to {{$patient->name}}</h4>
                </div>
                @include('layout.errors')
                {{--<!-- <div> -->--}}
                    @foreach($signatures as $signature)
                        {{--<!-- <div> -->--}}
                            <form method="post" action="/patients/{{$patient->id}}/signature/{{$signature->id}}">
                                @method('PATCH')
                                @csrf
                                <label class="checkbox" for="assigned">
                                    <input type="checkbox" name="assigned" value="{{$signature->id}}" onchange="this.form.submit()">
                                    {{$signature->printName}}
                                </label>
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
