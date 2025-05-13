<div class="d-flex">

    <!-- Sidebar -->
    <nav class="bg-white rounded border-end p-4 d-flex flex-column justify-content-between shadow-sm" style="width: 250px; min-height: 100vh;">
    <div>
        <div class="mb-4 text-center">
            <div class="fw-bold fs-4 text-primary">eduskul</div>
        </div>

        <ul class="nav flex-column gap-2">
            <li class="nav-item">
                <a class="nav-link text-dark sidebar-link" href="{{route ('dashboard')}}">
                    <i class="fa fa-user me-2"></i> Profile Akun
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark sidebar-link" href="#">
                    <i class="fa fa-clock-rotate-left me-2"></i> Riwayat Langganan
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark sidebar-link" href="#">
                    <i class="fa fa-file-invoice me-2"></i> Invoice
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark sidebar-link" href="#">
                    <i class="fa fa-circle-question me-2"></i> Bantuan
                </a>
            </li>
        </ul>
    </div>

    <div class="pt-4">
        <a href="#" class="text-danger fw-semibold text-decoration-none sidebar-link">
            <i class="fa-solid fa-door-open me-2"></i>Keluar
        </a>
    </div>
</nav>
