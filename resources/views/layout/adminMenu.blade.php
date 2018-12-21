<!-- START NAV -->


<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">
<!-- Scripts -->
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
        <div id="navMenu" class="navbar-menu">
            <div class="navbar-start">
                <div class="navbar-item has-dropdown is-hoverable">
                    <a class="navbar-link" href="/patients">
                        Patients
                    </a>
                    <div class="navbar-dropdown">
                        <a class="navbar-item" href="/patients">
                            View All Patients
                        </a>
                        <a class="navbar-item" href="/patients/create">
                            Create New Patient
                        </a>
                        <hr class="navbar-divider">

                        <a class="navbar-item">
                            View Level 1
                        </a>
                        <a class="navbar-item">
                            View Level 2
                        </a>
                        <a class="navbar-item">
                            View Level 3
                        </a>
                        <a class="navbar-item">
                            View Level 4
                        </a>
                    </div>
                </div>
                <div class="navbar-item has-dropdown is-hoverable">
                    <a class="navbar-link" href="/meds">
                        Medication
                    </a>

                    <div class="navbar-dropdown">
                        <a class="navbar-item" href="/meds">
                            View All Medication
                        </a>
                        <hr class="navbar-divider">

                        <a class="navbar-item" href="/meds/create">
                            Create New Medication
                        </a>
                    </div>
                </div>
                <a class="navbar-item" target="_blank" href="/barcode">
                    Barcode
                </a>
                <a class="navbar-item" target="_blank" href="/sim">
                    Simulator
                </a>

            </div>

        </div>
    </div>


    @guest
        {{redirect('/')}}
    @else
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
                </a>
            </div>
        </div>
    </div>
    </div>
    @endguest
</nav>
@include('layout.sessionMessage')
<!-- END NAV -->
