<!-- Sidebar -->
<ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('productform')}}">
        <div class="sidebar-brand-icon">
          <img src="{{asset('admin/img/logo/1.jpg')}}">
        </div>
      </a>
      <hr class="sidebar-divider">
      <div class="sidebar-heading">
      Tables
      </div>


      <li class="nav-item">
        <a class="nav-link" href="{{route('productform')}}">
          <i class="fas fa-fw fa-table"></i>
          <span>Product Tables</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('/TypesForm')}}">
          <i class="fas fa-fw fa-table"></i>
          <span>Types Tables</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('background')}}">
          <i class="fas fa-fw fa-table"></i>
          <span>background Tables</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('contents')}}">
          <i class="fas fa-fw fa-table"></i>
          <span>Contents Tables</span>
        </a>
      </li>
      <hr class="sidebar-divider">
      <div class="version" id="version-ruangadmin"></div>
    </ul>
    <!-- Sidebar -->