<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <!-- <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li> -->
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">

      <!-- Fullscreen Menu -->
      <!-- <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li> -->
      
      <!-- Authentication -->
      <form method="POST" action="{{ route('logout') }}">
      @csrf
      <li class="nav-item">
        <a class="nav-link" data-toggle="dropdown" href="#" role="button">
          <i>{{ Auth::user()->name }}</i>
        </a>
        <div class="dropdown-menu dropdown-menu-right">          
          <a :href="route('logout')"
             onclick="event.preventDefault();
             this.closest('form').submit();"
                class="dropdown-item" style="text-align: center;">Logout</a>
        </div>
      </li>
      </form>
      <form method="POST" action="{{ route('logout') }}">
      @csrf
      <li class="nav-item">
        <a class="media" data-toggle="dropdown" href="#" role="button">
            <img src="{{ asset('template/dist/img/user2-160x160.jpg') }}" alt="User Avatar" class="img-circle mr-3" width="40" height="40">
        </a>
        <div class="dropdown-menu dropdown-menu-right">          
          <a :href="route('logout')"
             onclick="event.preventDefault();
             this.closest('form').submit();"
                class="dropdown-item" style="text-align: center;">Logout</a>
        </div>
      </li>
      </form>
    </ul>
  </nav>
  <!-- /.navbar -->