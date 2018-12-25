<meta name="csrf-token" content="{{ csrf_token() }}">
<script src="{{ asset('js/app.js') }}" defer></script>
<nav class="navbar is-info">
    <div class="container">
        <div class="navbar-brand">
            <a class="navbar-item brand-text" href="../">
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
</nav>
@include('layout.sessionMessage')
<!-- END NAV -->
