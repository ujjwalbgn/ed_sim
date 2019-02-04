<!-- START NAV -->


<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>

<!-- *********************************************** -->
    <!--Navbar -->
    <nav class="mb-4 navbar navbar-expand-lg navbar-light "> <!--bg-unique-->
        <a class="navbar-brand" href="../"><strong>Edsime</strong></a>
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-3" aria-controls="navbarSupportedContent-3" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
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
                <!-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user"></i> 
                        </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-unique" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li> -->
            </ul>
        </div>
    </nav>
    <!--/.Navbar -->
<!-- *********************************************** -->

{{--<nav class="navbar is-info" role="navigation">--}}
        {{--<div class="navbar-brand">--}}
            {{--<a class="navbar-item brand-text" href="../">--}}
              {{--<strong>Edsime</strong>--}}
            {{--</a>--}}
            {{--<div class="navbar-burger burger" data-target="navMenu">--}}
                {{--<span></span>--}}
                {{--<span></span>--}}
                {{--<span></span>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<div id="navMenu" class="navbar-menu">--}}
            {{--<div class="navbar-start">--}}
                {{--<div class="navbar-item has-dropdown is-hoverable">--}}
                    {{--<a class="navbar-link" href="/patients">--}}
                        {{--Patients--}}
                    {{--</a>--}}
                    {{--<div class="navbar-dropdown">--}}
                        {{--<a class="navbar-item" href="/patients">--}}
                            {{--View All Patients--}}
                        {{--</a>--}}
                        {{--<a class="navbar-item" href="/patients/create">--}}
                            {{--Create New Patient--}}
                        {{--</a>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="navbar-item has-dropdown is-hoverable">--}}
                    {{--<a class="navbar-link" href="/patients">--}}
                        {{--Record Signatures--}}
                    {{--</a>--}}
                    {{--<div class="navbar-dropdown">--}}
                        {{--<a class="navbar-item" href="/signature">--}}
                            {{--View All Signature--}}
                        {{--</a>--}}
                        {{--<a class="navbar-item" href="/signature/create">--}}
                            {{--Create New Signature--}}
                        {{--</a>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="navbar-item has-dropdown is-hoverable">--}}
                    {{--<a class="navbar-link" href="/meds">--}}
                        {{--Medication--}}
                    {{--</a>--}}
                    {{--<div class="navbar-dropdown">--}}
                        {{--<a class="navbar-item" href="/meds">--}}
                            {{--View All Medication--}}
                        {{--</a>--}}
                        {{--<hr class="navbar-divider">--}}

                        {{--<a class="navbar-item" href="/meds/create">--}}
                            {{--Create New Medication--}}
                        {{--</a>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<a class="navbar-item" target="_blank" href="/barcode">--}}
                    {{--Barcode--}}
                {{--</a>--}}
                {{--<a class="navbar-item" target="_blank" href="/sim">--}}
                    {{--Simulator--}}
                {{--</a>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--<div class="navbar-end">--}}
        {{--<div class="navbar-item">--}}
            {{--<div class="buttons">--}}
                {{--<a class="button is-light">--}}
                    {{--User: {{ Auth::user()->name }}--}}
                {{--</a>--}}
                {{--<a class="button" href="{{ route('logout') }}"--}}
                   {{--onclick="event.preventDefault();--}}
                                                     {{--document.getElementById('logout-form').submit();">--}}
                    {{--{{ __('Logout') }}--}}
                    {{--<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
                        {{--@csrf--}}
                    {{--</form>--}}
                {{--</a>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</nav>--}}
@include('layout.sessionMessage')
<!-- END NAV -->
