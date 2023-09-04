<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="<?= base_url('/assets/dist/img/profile/'.session()->get('picture')) ?>" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block"><?= session()->get('nama') ?></a>
      </div>
    </div>
    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <?php if(session()->get('is_pegawai') === 1) : ?>
        <li class="nav-item">
          <a href="<?= base_url('/pegawai/dashboard') ?>" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>Dashboard</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?= base_url('/pegawai/profile') ?>" class="nav-link">
            <i class="nav-icon fas fa-user"></i>
            <p>Profile</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?= base_url('/pegawai/pendidikan') ?>" class="nav-link">
            <i class="nav-icon fas fa-graduation-cap"></i>
            <p>Pendidikan</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?= base_url('/pegawai/pelatihan') ?>" class="nav-link">
            <i class="nav-icon fas fa-book"></i>
            <p>Pelatihan</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?= base_url('/pegawai/manajemen-akun') ?>" class="nav-link">
            <i class="nav-icon fas fa-cogs"></i>
            <p>Manajemen Akun</p>
          </a>
        </li>
        <?php else : ?>
        <li class="nav-item">
          <a href="<?= base_url('/user/dashboard') ?>" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>Dashboard</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?= base_url('/user/profile') ?>" class="nav-link">
            <i class="nav-icon fas fa-user"></i>
            <p>Profile</p>
          </a>
        </li>
        <?php endif ?>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>