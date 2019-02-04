@if(isset($meds))
            <!-- <hr> -->
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h4 class="title is-4">Medication Assigned</h4>
                        <a class="btn btn-success btn-sm" href="/patients/{{$patient->id}}/meds">
                            <strong>Edit Patient's Medications</strong>
                        </a>
                    </div>
                </div>
            </div>
            <table class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth">
                <thead>
                <tr>
                    <th>
                        No.
                    </th>
                    <th>
                        Medication Name
                    </th>
                    {{--<th>--}}
                        {{--Time--}}
                    {{--</th>--}}
                    {{--<th>Description</th>--}}
                    <th>
                    </th>
                </tr>
                </thead>
                <tbody>
                @foreach($meds as $index => $med)
                    <tr>
                        <th>{{$index+1}}</th>{{-- (+1) beacuse $index starts from 0 --}}
                    <th><a href="/meds/{{$med->id}}">
                            {{$med->name}}
                        </a></th>
                        {{--<th>--}}
                            {{--{{$med->time}}--}}
                        {{--</th>--}}
                        {{--<th>--}}
                            {{--{{$med->description}}--}}
                        {{--</th>--}}
                        <th>
                        <form method="post" action="/patients/{{$patient->id}}/med/{{$med->id}}">
                                @method('DELETE')
                                @csrf
                                        <button type="submit" class="btn btn-danger btn-sm">Remove medication </button>
                            </form></th>
                </tr>
                </tbody>
                @endforeach
            </table>
@else
    No Medication Found
@endif
