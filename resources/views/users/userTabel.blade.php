<table class="table table-hover w-auto text-nowrap">
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
            <td>{{$index+1}}</td>
            <td>
                <a class="text-info" href="/users/{{$user->id}}">
                    {{$user->name}}
                </a>
            </td>
            <td>
                {{--this can be used even when User has multiple roles--}}
                @if(!empty($user->getRoleNames()))
                    @foreach($user->getRoleNames() as $v)
                        <h5><span class="badge badge-pill badge-light">{{ucfirst($v)}}</span></h5>
                    @endforeach
                @endif
            </td>
            <td>
                <p class="text-success">{{$user->email}}</p>
            </td>
            <td>
				<div class="btn-group" role="group">
					<a href="{{ route('users.show',$user->id) }}">
						<button type="button" class="btn btn-success btn-indigo btn-sm my-0 btn-block"><i class="fa fa-sticky-note-o fa-sm pr-2" aria-hidden="true"></i>Show</button>
					</a>&nbsp
					<a href="{{ route('users.edit',$user->id) }}">
						<button type="button" class="btn btn-success btn-indigo btn-sm my-0 btn-block"><i class="fa fa-edit fa-sm pr-2" aria-hidden="true"></i>Edit</button>
					</a>&nbsp
					<form method="post" action="/users/{{$user->id}}">
						@method('DELETE')
						@csrf
						<button type="button" class="btn btn-danger btn-indigo btn-sm my-0 btn-block"><i class="fa fa-remove fa-sm pr-2" aria-hidden="true"></i>Delete</button>
					</form>
				</div>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
