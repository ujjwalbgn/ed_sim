<meta name="csrf-token" content="{{ csrf_token() }}">
<script src="{{ asset('js/app.js') }}" defer></script>

<!-- ************************************************************************** -->
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
<!-- ************************************************************************** -->
<!-- <nav class="navbar is-info" role="navigation">
        <div class="navbar-brand">
            <a class="navbar-item brand-text" href="/">
              <strong>Edsime</strong>
            </a>
            <div class="navbar-burger burger" data-target="navMenu">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
            <div class="navbar-start">
                <a class="navbar-item" href="/sim">
                    Scan Patient
                </a>
        </div>
    <div class="navbar-end">
        <div class="navbar-item">
            <div class="buttons">
                <a class="button is-light">
                    User: {{ Auth::user()->name }}
                </a>
                <a class="button" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </a>
            </div>
        </div>
    </div>
</nav> -->
<!-- END NAV -->
