<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="#" class="brand-link">
        <img src="{{ url('dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image
img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">KAMPUS MERDEKA</span>
    </a>
    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ url('dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Yudistira Rivaldi</a>
            </div>
        </div>
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">

                <li class="nav-item">
                    <a href="{{ route('monitoring.index') }}" class="nav-link active">
                        <i class="nav-icon fas fa-home"></i>
                        <p>
                            Monitoring
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>
