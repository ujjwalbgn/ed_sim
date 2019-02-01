<table class="table table-striped table-hover text-nowrap">
    <thead>
    <tr>
        <th>
            No.
        </th>
        <th>
            Patient's Name
        </th>
        <th>
            Simulation Level
        </th>
        <th>
            Barcode
        </th>
        <th></th>
    </tr>
    </thead>
    <tbody>
    @foreach($patients as $index => $patient)
        <tr>
            <td>{{$index+1}}</td>
            {{-- (+1) beacuse $index starts from 0 --}}
            <td>
                <a href="/patients/{{$patient->id}}">
                    {{$patient->name}}
                </a></th>
            <td>
                {{$patient->level}}
            </td>
            <td>
                {{$patient->barcode}}
            </td>
            <td>
                <a href="/patients/{{$patient->id}}">
                    <button type="button" class="btn btn-success btn-indigo btn-sm my-0 btn-block"><i class="fa fa-sticky-note-o fa-sm pr-2" aria-hidden="true"></i>View / Edit</button>
                </a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>