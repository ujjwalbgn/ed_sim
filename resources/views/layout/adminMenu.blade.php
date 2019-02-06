
<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>
 <!--Navbar -->
    <nav class="mb-4 navbar navbar-expand-lg navbar-light "> <!--bg-unique-->
        <a class="navbar-brand" href="../"><strong>Edsime</strong></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-3" aria-controls="navbarSupportedContent-3" aria-expanded="false" aria-label="Toggle navigation">
        </button>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Patients</a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-unique">
                        <a class="dropdown-item" href="/patients">View All Patients</a>
                        <a class="dropdown-item" href="/patients/create">Create New Patient</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Signatures</a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-unique">
                        <a class="dropdown-item" href="/signature">View All Signatures</a>
                        <a class="dropdown-item" href="/signature/create">Create New Signature</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Medication</a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-unique">
                        <a class="dropdown-item" href="/meds">View All Medication</a>
                        <a class="dropdown-item" href="/meds/create">Create New Medication</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" target="_blank" href="/barcode">Barcode</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" target="_blank" href="/sim">Simulator</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto nav-flex-icons">
                <div class="navbar-end">
                    <div class="navbar-item">
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
                    </div>
                </div>
            </ul>
        </div>
    </nav>

@include('layout.sessionMessage')
<!-- END NAV -->
