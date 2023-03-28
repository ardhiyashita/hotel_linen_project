<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('home') }}" class="brand-link">
      <img src="{{ asset('template/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Linen Center</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

      <!-- SidebarSearch Form -->
      <!-- <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div> -->

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="{{ route('home') }}" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>

          <!-- ORGANIZATION -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Organization Management
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('laundry_plant_index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Laundry Plant</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('driver_index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Driver</p>
                </a>
              </li>
            </ul>
          </li>

          <!-- HOTEL -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Hotel Management
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Group Hotel</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('hotel_index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Hotel</p>
                </a>
              </li>
            </ul>
          </li>

          <!-- LINEN -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Linen Management
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('linen_index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Linen</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('check_linen_status_index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Check Linen Status</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('register_linen_index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Register History</p>
                </a>
              </li>
            </ul>
          </li>

          <!-- TRANSACTION -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Transaction Management
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('hotel_transaction_index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Hotel Trasaction</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('internal_transaction_index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Internal Trasaction</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Internal Reject</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('packing_index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Packing</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Transfer</p>
                </a>
              </li>
            </ul>
          </li>
          
          <!-- BILLING -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Billing Management
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/examples/invoice.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Billing</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/profile.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Report</p>
                </a>
              </li>
            </ul>
          </li>

          <!-- PRESET -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Preset
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('template_index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Template</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('linen_category_index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Linen Category</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('linen_type_index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Linen Type</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('supplier_index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Supplier</p>
                </a>
              </li>
            </ul>

          </li>
                    
          <!-- PRIVILEGE -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Privilege
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('user_index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>User</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('role_user_index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Role</p>
                </a>
              </li>
            </ul>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
