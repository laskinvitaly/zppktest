<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="{{ route('main')}}" class="brand-link">     
    <span class="brand-text font-weight-light">Магазин</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    


    <!-- Sidebar Menu -->
    <nav class="mt-2">        
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
              with font-awesome or any other icon font library -->
        <li class="nav-item">
          <a href="{{route('group.index')}}" class="nav-link">
            <i class="nav-icon fas fa-shopping-bag"></i>
            <p>
              Группы
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('teather.index') }}" class="nav-link">
            <i class="nav-icon fas fa-shopping-bag"></i>
            <p>
              Преподаватели
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('entrant.index') }}" class="nav-link">
            <i class="nav-icon fas fa-solid fa-user"></i>
            <p>
              Абитуриенты
            </p>
          </a>
        </li>        
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>