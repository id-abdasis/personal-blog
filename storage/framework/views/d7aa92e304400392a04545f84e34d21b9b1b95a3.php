<aside id="sidebar-wrapper">
    <div class="sidebar-brand">
      <a href="index.html">Tukang Ketik</a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
      <a href="index.html">St</a>
    </div>
    <ul class="sidebar-menu">
      <li class="menu-header">Dashboard</li>
      <li class="dropdown">
        <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Dashboard</span></a>
        <ul class="dropdown-menu">
          <li><a class="nav-link" href="index-0.html">General Dashboard</a></li>
          <li><a class="nav-link" href="index.html">Ecommerce Dashboard</a></li>
        </ul>
      </li>
      <li class="menu-header">Blog Menu</li>
      <li class="dropdown <?php echo e(Request::route()->getName() == 'admin.tambah-artikel' ? ' active' : ''); ?>">
        <a href="#" class="nav-link has-dropdown"><i class="fas fa-book"></i><span>Artikel</span></a>
        <ul class="dropdown-menu">
          <li class="<?php echo e(Request::route()->getName() == 'admin.tambah-artikel' ? ' active' : ''); ?>"><a class="nav-link" href="<?php echo e(route('admin.tambah-artikel')); ?>">Tambah Artikel</a></li>
          <li><a class="nav-link" href="index.html">Daftar Artikel</a></li>
        </ul>
      </li>

      <li class="dropdown">
        <a href="#" class="nav-link has-dropdown"><i class="fas fa-bookmark"></i><span>Kategori</span></a>
        <ul class="dropdown-menu">
          <li><a class="nav-link" href="index-0.html">Tambah Kategori</a></li>
          <li><a class="nav-link" href="index.html">Daftar Kategori</a></li>
        </ul>
      </li>

      <li class="dropdown">
        <a href="#" class="nav-link has-dropdown"><i class="fas fa-user"></i><span>Penulis</span></a>
        <ul class="dropdown-menu">
          <li><a class="nav-link" href="index-0.html">Tambah Penulis</a></li>
          <li><a class="nav-link" href="index.html">Daftar Penulis</a></li>
        </ul>
      </li>

      <li class="dropdown">
        <a href="#" class="nav-link has-dropdown"><i class="fas fa-plug"></i><span>Plugin</span></a>
        <ul class="dropdown-menu">
          <li><a class="nav-link" href="index-0.html">Tambah Plugin</a></li>
          <li><a class="nav-link" href="index.html">Daftar Plugin</a></li>
        </ul>
      </li>


      <li><a class="nav-link" href="credits.html"><i class="fas fa-cogs"></i> <span>Pengaturan</span></a></li>
    </ul>

    <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
      <a href="https://getstisla.com/docs" class="btn btn-primary btn-lg btn-block btn-icon-split">
        <i class="fas fa-rocket"></i> Documentation
      </a>
    </div>        
  </aside><?php /**PATH C:\Server\www\tukangketik\resources\views/includes/admin/sidebar.blade.php ENDPATH**/ ?>