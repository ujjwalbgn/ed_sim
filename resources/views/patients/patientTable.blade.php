    <table class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth">
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
                <th>{{$index+1}}</th>{{-- (+1) beacuse $index starts from 0 --}}
                <th><a href="/patients/{{$patient->id}}">
                        {{$patient->name}}
                    </a></th>
                <th>
                    {{$patient->level}}
                </th>
                <th>
                    {{$patient->barcode}}
                </th>
                <th><a href="/patients/{{$patient->id}}">View / Edit</a></th>
            </tr>
        </tbody>
        @endforeach
    </table>

