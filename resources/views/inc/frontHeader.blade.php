<header class="wrapper bg-soft-primary d-print-none">
    <nav class="navbar navbar-expand-lg center-nav transparent navbar-light">
        <div class="container flex-lg-row flex-nowrap align-items-center">
            <div class="navbar-brand w-100">
                <a href="{{ url('/') }}">
                    <img src="{{ asset('images/logo/unical-jupeb.png') }}" srcset="{{ asset('images/logo/unical-jupeb.png') }}" alt=""  width="100"/>
                </a>
            </div>
            <div class="navbar-collapse offcanvas-nav">
                <div class="offcanvas-header d-lg-none d-xl-none">
                    <a href="{{ url('/') }}">
                        <img  src="{{ asset('images/logo/unical-jupeb.png') }}" srcset="{{ asset('images/logo/unical-jupeb.png') }}"   width="100"/>
                    </a>
                    <button type="button" class="btn-close btn-close-white offcanvas-close offcanvas-nav-close"
                        aria-label="Close"></button>
                </div>
                <ul class="navbar-nav text-uppercase">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('apply.main') }}">Apply</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admission.main') }}">Admission</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('schoolfee.main') }}">School Fee</a>
                    </li>
                </ul>
                <!-- /.navbar-nav -->
            </div>
            <!-- /.navbar-collapse -->
            <div class="navbar-other w-100 d-flex ms-auto">
                <ul class="navbar-nav flex-row align-items-center ms-auto" data-sm-skip="true">

                    <li class="nav-item d-lg-none">
                        <div class="navbar-hamburger"><button class="hamburger animate plain"
                                data-toggle="offcanvas-nav"><span></span></button></div>
                    </li>
                </ul>
                <!-- /.navbar-nav -->
            </div>
            <!-- /.navbar-other -->
        </div>
        <!-- /.container -->
    </nav>
    <!-- /.navbar -->
</header>
