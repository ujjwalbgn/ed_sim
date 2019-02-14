@extends('layouts.app')

@section('title', '| Edit User')

@section('content')

    <div class="btn-outline-light">
        <a href="{{ URL::previous() }}">Go Back</a>
    </div>
<br>
    <div class='col-lg-4 col-lg-offset-4'>

        <h1><i class='fa fa-user-plus'></i> Edit {{$user->name}}</h1>
        <hr>
    <form method="post" action="/users/{{$user->id}}">
        @csrf
        @method('Patch')
        <div class="form-group">
            <label for="name">Name</label>
            <input class="form-control" name="name" type="text" value="{{$user->name}}" id="name">
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input class="form-control" name="email" type="email" value="{{$user->email}}" id="email">
        </div>

        <div class='form-group'>

                <label for="role">Role</label>

                <select name="roles"  class="input {{$errors->has('type') ? 'is-danger' : ''}}" required>
                    <option></option>
                @foreach ($roles as $role)
                    <option value="{{$role->id}}">{{ucfirst($role->name)}}</option><br>
                    @endforeach
                </select>

        </div>
        <div class="form-group row">
            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

            <div class="col-md-6">
                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                @endif
            </div>
        </div>

        <div class="form-group row">
            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

            <div class="col-md-6">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
            </div>
        </div>

        <input class="btn btn-primary" type="submit" value="Add">
    </form>
    </div>

@endsection
