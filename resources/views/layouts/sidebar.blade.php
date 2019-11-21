<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="/admins/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">SMS</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="/admins/dist/img/admin.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ Auth::user()->name }}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{ route('dashboard') }}" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>

                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="fas fa-graduation-cap"></i>
                        <p>
                            Course
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('course') }}" class="nav-link">
                                <i class="fab fa-discourse"></i>
                                <p>Manage Course</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="fa fa-cogs"></i>
                        <p>
                            Settings
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="" class="nav-link">
                                <i class="fa fa-university"></i>
                                <p>Academic</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="" class="nav-link">
                                <i class="fa fa-procedures"></i>
                                <p>Program</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="" class="nav-link">
                                <i class="fas fa-level-up-alt"></i>
                                <p>Level</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="" class="nav-link">
                                <i class="fas fa-th-large"></i>
                                <p>Batch</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="" class="nav-link">
                                <i class="fas fa-layer-group"></i>
                                <p>Group</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="" class="nav-link">
                                <i class="fa fa-school"></i>
                                <p>Shift</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="" class="nav-link">
                                <i class="fa fa-calendar-times"></i>
                                <p>Time</p>
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