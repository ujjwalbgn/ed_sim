            <hr>
            <div class="columns">
                <div class="column">
                <h4 class="title is-4">Signature Assigned</h4>
                </div>
                <div class="column">
                <a class="button is-link" href="/patients/{{$patient->id}}/signatures">
                <strong>Edit Patient's Records Signature</strong>
            </a>
                    @if(isset($signatures))
                </div></div>
            <table class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth">
                <thead>
                <tr>
                    <th>
                        No.
                    </th>
                    <th>
                        Print Name
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
                @foreach($signatures as $index => $signature)
                    <tr>
                        <th>{{$index+1}}</th>{{-- (+1) beacuse $index starts from 0 --}}
                    <th><a href="/signatures/{{$signature->id}}">
                            {{$signature->printName}}
                        </a></th>
                        {{--<th>--}}
                            {{--{{$signature->time}}--}}
                        {{--</th>--}}
                        {{--<th>--}}
                            {{--{{$signature->description}}--}}
                        {{--</th>--}}
                        <th>
                        <form method="post" action="/patients/{{$patient->id}}/signature/{{$signature->id}}">
                                @method('DELETE')
                                @csrf
                                        <button type="submit" class="button is-danger is-outlined">Remove Signature </button>
                            </form></th>
                </tr>
                </tbody>
                @endforeach
            </table>
@else
    <br>
    No Signature Found
@endif
