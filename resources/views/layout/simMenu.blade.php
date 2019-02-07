<meta name="csrf-token" content="{{ csrf_token() }}">
<script src="{{ asset('js/app.js') }}" defer></script>

<nav class="navbar navbar-expand-lg navbar-fixed-top navbar-light">
    <div class="container">
        <ul class="nav navbar-nav">
            <li class="nav-item active">
    <a class="navbar-brand" href="../"><strong>Edsime</strong></a>
            </li>
        </ul>
        <ul class="nav navbar-nav mx-auto">
            <li class="nav-item"><a class="nav-link btn btn-info" href="/sim">Scan Patient</a></li>
        </ul>
        <ul class="nav navbar-nav">
            <li class="nav-item">
                <div class="buttons">
                    <a class="button is-light">
                    <span class="badge badge-pill badge-info">
                        User: {{ Auth::user()->name }}
                    </span>
                    </a>
                    <a class="button" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();"><i class="fa fa-user"></i> 
                        {{ __('Logout') }}
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </a>
                </div>
            </li>
        </ul>
    </div>
</nav>
