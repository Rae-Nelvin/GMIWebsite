<!-- Sidebar Menu -->
<nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item ">
            <a href="{{ route('admin.dashboard') }}" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Dashboard
              </p>
            </a>
            </li>
          <li class="nav-item">
            <a href="{{ route('admin.photos') }}" class="nav-link">
            <i class="nav-icon far fa-images"></i>
              <p>
                Galleries
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('admin.news') }}" class="nav-link">
            <i class="nav-icon far fa-newspaper"></i>
              <p>
                News
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('admin.admin') }}" class="nav-link">
            <i class="nav-icon fas fa-users-cog"></i>
              <p>
                Admin & Staff
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('admin.link') }}" class="nav-link">
            <i class="nav-icon fas fa-link"></i>
              <p>
                Links & IP
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
