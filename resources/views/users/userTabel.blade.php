<table class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth">
    <thead>
    <tr>
        <th>
            No.
        </th>
        <th>
            Name
        </th>
        <th>
            Role
        </th>
        <th>
            Email
        </th>
        <th></th>
    </tr>
    </thead>
    <tbody>
    @foreach($users as $index => $user)
        <tr>
            <th>{{$index+1}}</th>{{-- (+1) beacuse $index starts from 0 --}}
            <th><a href="/users/{{$user->id}}">
                    {{$user->name}}
                </a></th>
            <th>
                {{$user->role}}
            </th>
            <th>
                {{$user->email}}
            </th>
            <th><a href="/users/{{$user->id}}">View / Edit</a></th>
        </tr>
    </tbody>
    @endforeach
</table>

