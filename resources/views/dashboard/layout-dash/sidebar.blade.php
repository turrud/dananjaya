<div class="sidebar pe-4 pb-3">
    <nav class="navbar bg-secondary navbar-dark">
        <a href="/admin-dashboard" class="navbar-brand mx-4 mb-3">
            <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>Dananjaya Design</h3>
        </a>
        <div class="d-flex align-items-center ms-4 mb-4">
            <div class="position-relative">
                <img class="rounded-circle" src="images/kin.png" alt="" style="width: 40px; height: 40px;">
                <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
            </div>
            <div class="ms-3">
                <h6 class="mb-0">Bokin</h6>
                <span>Admin</span>
            </div>
        </div>
        <div class="navbar-nav w-100">
            <a href="/admin-dashboard" class="nav-item nav-link {{ Request::is('admin-dashboard') ? 'active' : '' }}"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
            <a href="/pay" class="nav-item nav-link {{ Request::is('pay') ? 'active' : '' }}"><i class="bi bi-credit-card-2-back"></i>Pembayaran</a>
            <a href="/event" class="nav-item nav-link {{ Request::is('event') ? 'active' : '' }}"><i class="bi bi-calendar2-event"></i>Event</a>
            <a href="/porto" class="nav-item nav-link {{ Request::is('porto') ? 'active' : '' }}"><i class="bi bi-journal-text"></i>Portofolio</a>
        </div>
    </nav>
</div>
