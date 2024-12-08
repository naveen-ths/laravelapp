<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark"> <!--begin::Sidebar Brand-->
    <div class="sidebar-brand"> <!--begin::Brand Link--> 
        <a href="./index.html" class="brand-link"> <!--begin::Brand Image--> 
            <img src="{{ asset('assets/theme/dist/assets/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image opacity-75 shadow"> <!--end::Brand Image--> <!--begin::Brand Text--> 
            <span class="brand-text fw-light">Stock App</span> <!--end::Brand Text--> 
        </a> <!--end::Brand Link--> 
    </div> <!--end::Sidebar Brand--> <!--begin::Sidebar Wrapper-->

    <div class="sidebar-wrapper">
        <div class="form-inline">
            <div class="input-group mb-3" data-widget="sidebar-search">
                <input class="form-control" type="search" placeholder="Search Here" aria-label="Search">
<!--                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                       <i class="nav-icon bi bi-search"></i>
                    </button>
                </div>-->
            </div>
        </div>
        <nav class="mt-2"> <!--begin::Sidebar Menu-->
            <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">
                <li class="nav-item menu-open"> <a href="{{ route('dashboard') }}" class="nav-link active"> <i class="nav-icon bi bi-speedometer"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
            </ul> <!--end::Sidebar Menu-->
        </nav>
    </div> <!--end::Sidebar Wrapper-->
</aside> <!--end::Sidebar-->