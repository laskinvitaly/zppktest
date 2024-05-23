<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="{{ route('main')}}" class="brand-link">     
    <span class="brand-text font-weight-light">ЗППК</span>
  </a>
  @auth 
  <div class="user-panel mt-3 pb-3 mb-3 d-flex">
    
    <div class="info">
      <a href="#" class="d-block">Пользователь</a> {{ auth()->user()->id }}
      <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit" class="btn btn-block btn-dark btn-sm mt-3">Выход</button>
    </form>
    </div>    
  </div>
  @endauth
  <!-- Sidebar -->
  <div class="sidebar">
    


    <!-- Sidebar Menu -->
    <nav class="mt-2">        
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
              with font-awesome or any other icon font library -->
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-edit"></i>
            <p>
              Пользователи
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
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
            <li class="nav-item">
              <a href="{{ route('student.index') }}" class="nav-link">
                <i class="nav-icon fas fa-solid fa-user"></i>
                <p>
                  Студенты
                </p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-edit"></i>
            <p>
              Учебный раздел
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{route('group.index')}}" class="nav-link">
                <i class="nav-icon fas fa-shopping-bag"></i>
                <p>
                  Группы
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('lesson.index') }}" class="nav-link">
                <i class="nav-icon fas fa-shopping-bag"></i>
                <p>
                  Занятия
                </p>
              </a> 
            </li>                      
          </ul>
        </li> 
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-edit"></i>
            <p>
              Новостной раздел
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{route('category.index')}}" class="nav-link">
                <i class="nav-icon fas fa-shopping-bag"></i>
                <p>
                  Категории
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('new.index') }}" class="nav-link">
                <i class="nav-icon fas fa-shopping-bag"></i>
                <p>
                  Новости
                </p>
              </a>
            </li>                        
          </ul>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-edit"></i>
            <p>
              Администрирование
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{route('role.index')}}" class="nav-link">
                <i class="nav-icon fas fa-shopping-bag"></i>
                <p>
                  Роли
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('register.index') }}" class="nav-link">
                <i class="nav-icon fas fa-shopping-bag"></i>
                <p>
                  Заявки на регистрацию
                </p>
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