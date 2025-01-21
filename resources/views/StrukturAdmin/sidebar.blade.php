<div class="sidebar">
    <!-- Sidebar user (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
    </div>

    <!-- SidebarSearch Form -->
    <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
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
                <a href="/Admin/welcome" class="nav-link">
                    <i class="fa fa-home"></i>
                    <p>
                        Dashboard
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="fas fa-building"></i>
                    <p>
                        Kategori
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="/category" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>List Kategori</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/category/create" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Create Kategori</p>
                        </a>
                    </li>
                </ul>
            <li class="nav-item">
                <a href="/post" class="nav-link">
                    <i class="fa fa-book"></i>
                    <p>
                        Menu
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('all.pesanan') }}" class="nav-link">
                    <i class="fas fa-clipboard"></i>
                    <p>
                        Pesanan
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="fas fa-money-bill-wave"></i>
                    <p>
                        Penjualan
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="/admin/sale" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>List Data Penjualan</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/admin/sale/create" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Create Penjualan</p>
                        </a>
                    </li>
                </ul>
                </ul>
            </li>
        </ul>
    </nav>
    <!-- /.sidebar-menu -->
</div>
