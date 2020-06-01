<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">

            <li class="nav-item mr-auto"><a class="navbar-brand" href="{{ URL::route('pages.dashboard') }}">


            <li class="nav-item mr-auto"><a class="navbar-brand" href="/">

                    <div class="brand-logo"></div>
                    <h2 class="brand-text mb-0">GLT-CIS</h2>

            <li class="nav-item mr-auto"><a class="navbar-brand" href="{{ URL::route('pages.dashboard') }}">
                    <div><img src="../images/logo/glt.ico" height=50px alt="GLT-CIS"></div>
                    {{-- <h2 class="brand-text mb-0">GLT-CIS</h2> --}}

                </a></li>
            <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="feather icon-x d-block d-xl-none font-medium-4 primary toggle-icon"></i><i class="toggle-icon feather icon-disc font-medium-4 d-none d-xl-block primary" data-ticon="icon-disc"></i></a></li>
        </ul>
    </div>
    <div class="shadow-bottom"></div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            {{-- Foreach menu item starts --}}
            {{-- Foreach menu item ends --}}


           <li class="nav-item active">
                    <a href="{{ URL::route('pages.dashboard') }}">
                        <i class="feather icon-home"></i>
                        <span class="menu-title" data-i18n="">Dashboard</span>
                                            </a>
                                    </li>
                            <li class="nav-item ">
                    <a href="/">
                        <i class="feather icon-users"></i>
                        <span class="menu-title" data-i18n="">Register Members</span>
                                            </a>
                                            <ul class="menu-content">
            <li class="">
            <a href="{{ URL::route('pages.members') }}">
                <i class="feather icon-user-plus"></i>
                <span class="menu-title" data-i18n="">Add Member</span>
            </a>
                    </li>
            <li class="">
            <a href="{{ URL::route('pages.viewmembers') }}">
                <i class="feather icon-user"></i>
                <span class="menu-title" data-i18n="">View Members</span>
            </a>
                    </li>
    </ul>                                    </li>
                            <li class="nav-item ">
                    <a href="/">
                        <i class="feather icon-map"></i>
                        <span class="menu-title" data-i18n="">Extension</span>
                                            </a>
                                            <ul class="menu-content">
            <li class="">
            <a href="{{ URL::route('pages.addext') }}">
                <i class="feather icon-map-pin"></i>
                <span class="menu-title" data-i18n="">Add Extension</span>
            </a>
                    </li>
            <li class="">
            <a href="{{ URL::route('pages.viewext') }}">
                <i class="feather icon-layout"></i>
                <span class="menu-title" data-i18n="">View Extension</span>
            </a>
                    </li>
    </ul>                                    </li>
                            <li class="nav-item ">
                    <a href="/">
                        <i class="feather icon-layers"></i>
                        <span class="menu-title" data-i18n="">Organs</span>
                                            </a>
                                            <ul class="menu-content">
            <li class="">
            <a href="{{ URL::route('pages.ministry') }}">
                <i class="feather icon-shield"></i>
                <span class="menu-title" data-i18n="">Ministry</span>
            </a>
                    </li>
            <li class="">
            <a href="{{ URL::route('pages.unit') }}">
                <i class="feather icon-play"></i>
                <span class="menu-title" data-i18n="">Unit</span>
            </a>
                    </li>
            <li class="">
            <a href="{{ URL::route('pages.committee') }}">
                <i class="feather icon-users"></i>
                <span class="menu-title" data-i18n="">Committee</span>
            </a>
                    </li>
            <li class="">
            <a href="#">
                <i class="feather icon-users"></i>
                <span class="menu-title" data-i18n="">Cell</span>
            </a>
                    </li>
    </ul>                                    </li>
                            <li class="nav-item ">
                    <a href="{{ URL::route('pages.events') }}">
                        <i class="feather icon-calendar"></i>
                        <span class="menu-title" data-i18n="">Events</span>
                                            </a>
                                    </li>
                            <li class="nav-item ">
                    <a href="#">
                        <i class="feather icon-file"></i>
                        <span class="menu-title" data-i18n="">Reports</span>
                                            </a>
                                            <ul class="menu-content">
            <li class="">
            <a href="{{ URL::route('pages.ministryreport') }}">
                <i class="feather icon-shield"></i>
                <span class="menu-title" data-i18n="">Ministry Report</span>
            </a>
                    </li>
            <li class="">
            <a href="{{ URL::route('pages.servicereport') }}">
                <i class="feather icon-play"></i>
                <span class="menu-title" data-i18n="">Service Report</span>
            </a>
                    </li>
            <li class="">
            <a href="{{ URL::route('pages.carereport') }}">
                <i class="feather icon-users"></i>

                <span class="menu-title" data-i18n="">Care Report</span>

                <span class="menu-title" data-i18n="">Leaders Report</span>

            </a>
                    </li>
            <li class="">
            <a href="{{ URL::route('pages.financialreport') }}">
                <i class="feather icon-users"></i>
                <span class="menu-title" data-i18n="">Financial Report</span>
            </a>
                    </li>
            <li class="">
            <a href="{{ URL::route('pages.smrreport') }}">
                <i class="feather icon-users"></i>
                <span class="menu-title" data-i18n="">SMR Report</span>
            </a>
                    </li>
    </ul>                                    </li>
                            <li class="nav-item ">
                    <a href="/">
                        <i class="feather icon-dollar-sign"></i>
                        <span class="menu-title" data-i18n="">Funding</span>
                                            </a>
                                            <ul class="menu-content">
            <li class="">
            <a href="#">
                <i class="feather icon-shield"></i>
                <span class="menu-title" data-i18n="">Request</span>
            </a>
                    </li>
            <li class="">
            <a href="#">
                <i class="feather icon-play"></i>
                <span class="menu-title" data-i18n="">Reconciliation</span>
            </a>
                    </li>
    </ul>                                    </li>
                            <li class="nav-item ">
                    <a href="{{ URL::route('pages.ticket') }}">
                        <i class="feather icon-mail"></i>
                        <span class="menu-title" data-i18n="">Ticket</span>
                                            </a>
                                    </li>
                            <li class="nav-item ">
                    <a href="{{ URL::route('pages.start') }}">
                        <i class="feather icon-settings"></i>
                        <span class="menu-title" data-i18n="">Settings</span>
                                            </a>
                                    </li> 
           




        </ul>
    </div>
</div>
<!-- END: Main Menu-->
