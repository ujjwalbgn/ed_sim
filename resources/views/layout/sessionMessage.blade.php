@if(session()->has('message'))
    <div class="notification is-primary">
        {{ session()->get('message') }}
    </div>
    @elseif(session()->has('success'))
        <div class="notification is-success">
            {{ session()->get('success') }}
        </div>
    @elseif(session()->has('warning'))
        <div class="notification is-danger">
            {{ session()->get('warning') }}
        </div>
    @endif
