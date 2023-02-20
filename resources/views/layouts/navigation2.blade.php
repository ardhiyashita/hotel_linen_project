<!-- Topbar -->
    <nav class="navbar navbar-expand navbar-light bg-white topbar static-top shadow">
        <!-- <a class="fa fa-bars" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample"></a> -->
        
        <!-- <div class="ml-3 text-lg font-weight-bold text-primary text-uppercase mb-1">
            Website Linen Management Sistem</div> -->

        <!-- Topbar Navbar -->
        <ul class="navbar-nav">


            <!-- Sidebar - Brand -->
            <!-- <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Aplikasi Hotel</div>
            </a>

            <div class="topbar-divider d-none d-sm-block"></div> -->

                <!-- Nav Item - Dashboard -->
                <li class="nav-item @if(\Request::segment(1)  == 'home') active @endif"">
                    <a class="nav-link" href="/home">
                        <i class="fas fa-fw fa-tachometer-alt"></i>
                        <div class="ml-1 font-weight-bold text-primary">
                            Dashboard
                        </div>
                    </a>
                </li>

                <!-- Divider -->
                <!-- <hr class="sidebar-divider my-0"> -->

                <!-- Nav Item - Tables -->
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                        aria-expanded="true" aria-controls="collapsePages">
                        <i class="fas fa-fw fa-folder mr-1"></i>
                        <span>Organization Management</span>
                    </a>
                    <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Stock:</h6>
                            <a class="collapse-item" href="">Satuan</a>
                            <a class="collapse-item" href="">Supplier</a>
                            <a class="collapse-item" href="">Kategori Produk</a>
                        </div>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                        aria-expanded="true" aria-controls="collapsePages">
                        <i class="fas fa-fw fa-folder mr-1"></i>
                        <span>Hotel Management</span>
                    </a>
                    <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Stock:</h6>
                            <a class="collapse-item" href="">Satuan</a>
                            <a class="collapse-item" href="">Supplier</a>
                            <a class="collapse-item" href="">Kategori Produk</a>
                        </div>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                        aria-expanded="true" aria-controls="collapsePages">
                        <i class="fas fa-fw fa-folder mr-1"></i>
                        <span>Linen Management</span>
                    </a>
                    <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Stock:</h6>
                            <a class="collapse-item" href="">Satuan</a>
                            <a class="collapse-item" href="">Supplier</a>
                            <a class="collapse-item" href="">Kategori Produk</a>
                        </div>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                        aria-expanded="true" aria-controls="collapsePages">
                        <i class="fas fa-fw fa-folder mr-1"></i>
                        <span>Transaction Management</span>
                    </a>
                    <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Stock:</h6>
                            <a class="collapse-item" href="">Satuan</a>
                            <a class="collapse-item" href="">Supplier</a>
                            <a class="collapse-item" href="">Kategori Produk</a>
                        </div>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                        aria-expanded="true" aria-controls="collapsePages">
                        <i class="fas fa-fw fa-folder mr-1"></i>
                        <span>Billing Management</span>
                    </a>
                    <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Stock:</h6>
                            <a class="collapse-item" href="">Satuan</a>
                            <a class="collapse-item" href="">Supplier</a>
                            <a class="collapse-item" href="">Kategori Produk</a>
                        </div>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                        aria-expanded="true" aria-controls="collapsePages">
                        <i class="fas fa-fw fa-folder mr-1"></i>
                        <span>Preset</span>
                    </a>
                    <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Stock:</h6>
                            <a class="collapse-item" href="">Satuan</a>
                            <a class="collapse-item" href="">Supplier</a>
                            <a class="collapse-item" href="">Kategori Produk</a>
                        </div>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                        aria-expanded="true" aria-controls="collapsePages">
                        <i class="fas fa-fw fa-folder mr-1"></i>
                        <span>Privilage</span>
                    </a>
                    <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Stock:</h6>
                            <a class="collapse-item" href="">Satuan</a>
                            <a class="collapse-item" href="">Supplier</a>
                            <a class="collapse-item" href="">Kategori Produk</a>
                        </div>
                    </div>
                </li>
                
            <!-- Divider -->
            <div class="topbar-divider d-none d-sm-block"></div>

        </ul>

        <ul class="navbar-nav pl-5 ml-5">

        <span class="topbar-divider d-none d-sm-block ml-4"></span>
                <!-- Settings Dropdown -->
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <span class="ml-1 font-weight-bold text-primary">{{ Auth::user()->name }}</span></a>
                </li>

                <div class="topbar-divider d-none d-sm-block"></div>

                <!-- Authentication -->
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <span class="bg-primary font-weight-bold text-light" style="padding: 10px; border-radius: 10px;">
                            <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <div :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </div>
                            </form>
                        </span>
                    </a>
                </li>  

        </ul>

    </nav>
    <!-- End of Topbar -->
