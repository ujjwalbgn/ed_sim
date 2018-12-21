@if(session()->has('message'))
    <div class="notification is-warning">
        {{ session()->get('message') }}
    </div>
@endif
