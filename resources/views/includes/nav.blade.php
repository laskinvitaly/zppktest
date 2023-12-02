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
          <a href="{{route('categories.index')}}" class="nav-link">
            <i class="nav-icon fas fa-shopping-bag"></i>
            <p>
              Категории
            </p>
          </a>
        </li>
                
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>