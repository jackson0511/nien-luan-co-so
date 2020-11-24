 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="index3.html" class="brand-link">
    <img src="{{asset('admin_template')}}/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
    style="opacity: .8">
    <span class="brand-text font-weight-light">Tourism - Quản lý</span>
  </a>
  
  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{asset('admin_template')}}/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">Admin</a>
      </div>
    </div>
    
    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
          with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview">
            <a href="{{route('tour-list')}}" class="nav-link hoverable">
              <i class="nav-icon fas fa-th"></i>
              <p>Quản lý Tour</p>
            </a>
            <a href="{{route('tour-type-list')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>Quản lý loại tour</p>
            </a>
            <a href="{{route('promo-list')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>Chương trình khuyến mãi</p>
            </a>
            <a href="{{route('transport-list')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>Phương tiện đi lại</p>
            </a>
            {{-- <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>Nation</p>
            </a> --}}
            {{-- <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>Booking Ticket</p>
            </a> --}}
            {{-- <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>Customer</p>
            </a>--}}
            {{-- <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>Staff</p>
            </a> --}}
            {{-- <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>Position</p>
            </a>
            {{-- <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>Hotel</p>
            </a>
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>Restaurant</p>
            </a> --}}
            {{-- <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>Menu</p>
            </a>
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>Location</p>
            </a>
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>Ward</p>
            </a> --}}
            {{-- <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>District</p>
            </a>
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>Province</p>
            </a> --}}
            {{-- <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>Statitics</p>
            </a> --}}
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>