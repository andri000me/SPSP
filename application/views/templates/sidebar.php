<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion <?php if (!isset($_SESSION['username'])) echo "toggled" ?>" id="accordionSidebar">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="home">
    <div class="sidebar-brand-icon rotate-n-15">
      <i class="fas fa-book-reader"></i>
    </div>
    <div class="sidebar-brand-text mx-3">SPSP <sup>Online</sup></div>
  </a>

  <!-- Divider -->
  <hr class="sidebar-divider my-0">
  <?php if (isset($_SESSION['username'])) : ?>

    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
      Home
    </div>

    <li class="nav-item <?php if ($index == 1) echo "active" ?>">
      <a class="nav-link" href="<?= base_url('home') ?>">
        <i class="fas fa-fw fa-chart-area"></i>
        <span>Dashboard</span></a>
    </li>

    <hr class="sidebar-divider">
    <div class="sidebar-heading">
      History
    </div>

    <li class="nav-item <?php if ($index == 2) echo "active" ?>"">
      <a class=" nav-link" href="<?= base_url('input/inputdatasiswa') ?>">
      <i class="fas fa-fw fa-history"></i>
      <span>Input Data Siswa</span></a>
    </li>

    <hr class="sidebar-divider">
    <div class="sidebar-heading">
      History
    </div>

    <li class="nav-item <?php if ($index == 3) echo "active" ?>"">
      <a class=" nav-link" href="<?= base_url('input/inputdatanilai') ?>">
      <i class="fas fa-fw fa-history"></i>
      <span>Input Data Nilai</span></a>
    </li>

    <hr class="sidebar-divider">
    <div class="sidebar-heading">
      Account
    </div>

    <li class="nav-item">
      <a class="nav-link" href="" data-toggle="modal" data-target="#logoutModal">
        <i class="fas fa-fw fa-sign-out-alt"></i>
        <span>Logout</span></a>
    </li>

  <?php else : ?>

    <li class="nav-item">
      <a class="nav-link" href="auth">
        <i class="fas fa-fw fa-sign-in-alt"></i>
        <span>Login</span></a>
    </li>

  <?php endif ?>
  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">

  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>

</ul>
<!-- End of Sidebar -->