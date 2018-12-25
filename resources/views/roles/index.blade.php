@extends('layouts.app')

@section('title', '| Add Role')

@section('content')
    <div class='col-lg-4 col-lg-offset-4'>

        <h1><i class='fa fa-key'></i> All Roles</h1>
        <hr>
        <a href="/roles/create">Create New Role</a>
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                <tr><th>Role</th>
                    <th>Operation</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($roles as $role)
                    <tr>
                        <td>
                            {{$role->name}}
                        </td>
                        <td>
                            <form method="post" action="/roles/{{$role->id}}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class ="btn btn-danger">Delete</button>
                            </form>
                            @endforeach
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
