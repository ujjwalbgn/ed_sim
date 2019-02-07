@extends('layout.adminLayout')
@section('content')
<div class="container-fluid">
<br><br>
	<div class="row">
		<div class="col-md-12">
        {{--<div class="jumbotron">--}}
            <h3 class="text-center">
                    <p class="title">
                        Welcome to EdSime
                    </p>
                    <p class="subtitle">
                        You are Logged in as
                        <strong>
                            @role('admin')
                                Admin
                                    @else
                                @role('instructor')
                                    Instructor
                                    @else
                                    @role('student')
                                    Student
                                    @else
                                        Guest
                                    @endrole
                                @endrole
                            @endrole
                        </strong>
                    </p>
			</h3>
            <br><br>
			<div class="row">
                <div class="col-lg-12">
                <div class="jumbotron">
                @role('admin')
                    <div class="col-sm-12 col-md-12 col-lg-12">
                    <p>
                        <a href="/users"> 
                            <button type="button" class="btn btn-primary btn-md btn-block" href="/users" >Admin Control</button>
                        </a>
                    </p>
                    </div>
                @endrole
                @hasanyrole('admin|instructor')
                    <div class="col-sm-12 col-md-12 col-lg-12">
                    <p>
                        <a href="/patients">
                            <button type="button" class="btn btn-primary btn-md btn-block" href="/patients" >Edit Patients and Medication</button>
                        </a>
                    </p>
                    </div>
                @endrole
                    <div class="col-sm-12 col-md-12 col-lg-12">
                    <p>
                        <a href="/sim">
                            <button type="button" class="btn btn-info btn-md btn-block" href="/sim" >Open Simulator</button>
                        </a>
                    </p>
                    </div>
                </div>
                </div>
			</div>
		{{--</div>--}}
        </div>
	</div>
</div>
@endsection
