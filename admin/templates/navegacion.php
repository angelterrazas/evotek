<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../index.php" class="brand-link center">
      
      <span class="brand-text font-weight-light"><b>Evo</b>Teck</span>
    </a>

    <?php session_start(); ?>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="align white user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
        <i class=" ggg fas fa-angle-left"></i>
        </div>
        <div class="info">
          
          <a href="../index.php">Back Home Page</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Buscar.." aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          
          
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chalkboard-teacher"></i>
              <p>
                Action movies
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="lista-action.php" class="nav-link">
                  <i class="far fa-list-alt nav-icon"></i>
                  <p>Ver todos</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="crear-movie.php" class="nav-link">
                  <i class="fas fa-plus-circle nav-icon"></i>
                  <p>Agregar</p>
                </a>
              </li>
              
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-layer-group"></i>
              <p>
              Drama movies
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="lista-drama.php" class="nav-link">
                  <i class="far fa-list-alt nav-icon"></i>
                  <p>Ver todos</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="crear-movie.php" class="nav-link">
                  <i class="fas fa-plus-circle nav-icon"></i>
                  <p>Agregar</p>
                </a>
              </li>
              
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chalkboard-teacher"></i>
              <p>
              Animation movies
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="lista-animation.php" class="nav-link">
                  <i class="far fa-list-alt nav-icon"></i>
                  <p>Ver todos</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="crear-movie.php" class="nav-link">
                  <i class="fas fa-plus-circle nav-icon"></i>
                  <p>Agregar</p>
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