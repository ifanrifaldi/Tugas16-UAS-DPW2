<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <!-- <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      
    </ul> -->

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->


      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
        @if(Auth::check())
          {{request()->user()->nama}}
        @else
          Silahkan Login
        @endif
        <img src="{{url('public/admin')}}/dist/img/ifan11.jpg" alt="Logo" Height="30" class="img-circle">
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
             <i class="fa fa-user"></i> Profile
          </a>
          <a href="#" class="dropdown-item">
             <i class="fa fa-cog"></i> Setting
          </a>
          <div class="dropdown-divider"></div>


          <a href="{{url('logout')}}" class="dropdown-item">
             <i class="fa fa-sign-out"></i>Logout
          </a>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      
      
    </ul>
  </nav>