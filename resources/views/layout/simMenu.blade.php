<meta name="csrf-token" content="{{ csrf_token() }}">
<script src="{{ asset('js/app.js') }}" defer></script>


<!-- ************************************************************************** -->
<!-- <nav class="mb-4 navbar navbar-expand-lg navbar-light ">
    <a class="navbar-brand" href="../"><strong>Edsime</strong></a>
    <div class="navbar-collapse collapse justify-content-center order-2" id="collapsingNavbar">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="#">Scan Patient</a>
            </li>
        </ul>
    </div>
    <span class="navbar-text small text-truncate mt-1 w-50 text-right order-1 order-md-last">always show</span>
</nav> -->
<!-- ************************************************************************** -->

<nav class="navbar is-info" role="navigation">
    <!-- <div class="container"> -->
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
    <!-- </div> -->
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
<!-- END NAV -->
