@if(session()->has('message'))
    <div class="alert alert-success" role="alert">
        {{ session()->get('message') }}
    </div>
    @elseif(session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session()->get('success') }}
        </div>
    @elseif(session()->has('warning'))
        <div class="alert alert-danger" role="alert">
            {{ session()->get('warning') }}
        </div>
    @endif
