<nav id="sidebar">
    <div class="sidebar-header">
        <h6 class="text-white mb-1"><i class="fas fa-home me-2"></i> RT 13 RW 04</h6>
        <small class="text-light">Pondokkaso Tonggoh</small>
    </div>
    <ul class="list-unstyled components mt-3">
        <li class="<?= basename($_SERVER['PHP_SELF']) == 'dashboard.php' ? 'active' : '' ?>">
            <a href="dashboard.php"><i class="fas fa-tachometer-alt me-2"></i> Dashboard</a>
        </li>
        <li class="<?= basename($_SERVER['PHP_SELF']) == 'transaksi.php' ? 'active' : '' ?>">
            <a href="transaksi.php"><i class="fas fa-exchange-alt me-2"></i> Transaksi</a>
        </li>
        <li class="<?= basename($_SERVER['PHP_SELF']) == 'anggota.php' ? 'active' : '' ?>">
            <a href="anggota.php"><i class="fas fa-users me-2"></i> Anggota</a>
        </li>
        <li><a href="logout.php"><i class="fas fa-sign-out-alt me-2"></i> Keluar</a></li>
    </ul>
    <div class="text-center text-light small mt-auto pb-3">
        <p class="mb-0">© <?= date('Y') ?></p>
    </div>
</nav>