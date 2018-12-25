@extends('layouts.app')

@section('title', '| Add Role')

@section('content')
    <div class='col-lg-4 col-lg-offset-4'>

        <h1><i class='fa fa-key'></i> Add Role</h1>
        <hr>
        <form method="post" action="/roles">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input name="name" type="text" id="name" class="form-control"></div>
            <input type="submit" value="Add" class="btn btn-primary">
        </form>
    </div>
@endsection
