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
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
    @foreach($users as $index => $user)
        <tr>
            <th>{{$index+1}}</th>
            <th><a href="/users/{{$user->id}}">
                    {{$user->name}}
                </a></th>
            <th>
                {{--this can be used even when User has multiple roles--}}
                @if(!empty($user->getRoleNames()))
                    @foreach($user->getRoleNames() as $v)
                        <label class="badge badge-success">{{ucfirst($v)}}</label>
                    @endforeach
                @endif
            </th>
            <th>
                {{$user->email}}
            </th>
            <th>
                <div class="buttons">
                    <a  class="button is-info is-small" href="{{ route('users.show',$user->id) }}">Show</a>
                    <a class="button is-info is-small" href="{{ route('users.edit',$user->id) }}">Edit</a>
                    <form method="post" action="/users/{{$user->id}}">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="button is-danger is-outlined is-small">Delete</button>
                    </form>
                </div>
            </th>
        </tr>
    </tbody>
    @endforeach
</table>
