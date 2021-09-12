<aside class="main-sidebar bg-white">
  <!-- Brand Logo -->
  <a href="<?= base_url('dashboard/admin') ?>" class="brand-link">
    <img src="<?= base_url('assets/img/logo.png') ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">Dashboard</span>
  </a>
  <!-- Sidebar -->
  <div class="sidebar sticky-top">



    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        <li class="nav-item has-treeview">
          <a class="nav-link <?php if ($this->uri->segment(2) == "admin") {
                                echo "active";
                              } ?>" href="<?= site_url('dashboard/admin') ?>">
            <i class="nav-icon far fa-tachometer-alt"></i>
            <p>
              Beranda
            </p>
          </a>
        </li>
        <li class="nav-item has-treeview">
          <a href="<?= site_url('dashboard/viewallarticel') ?>" class="nav-link
           <?php if ($this->uri->segment(2) == "viewallarticel") {
              echo "active";
            } ?>
             <?php if ($this->uri->segment(2) == "postarticel") {
                echo "active";
              } ?>">
            <i class="nav-icon far fa-pen"></i>
            <p>
              Artikel
            </p>
          </a>
        </li>
        <li class="nav-item has-treeview">
          <a href="<?= site_url('dashboard/organization') ?>" class="nav-link
          <?php if ($this->uri->segment(2) == "organization") {
            echo "active";
          } ?>">
            <i class="nav-icon far fa-sitemap"></i>
            <p>
              Organisasi
            </p>
          </a>
        </li>
        <li class="nav-item has-treeview">
          <a href="<?= site_url('dashboard/gallery') ?>" class="nav-link
          <?php if ($this->uri->segment(2) == "gallery") {
            echo "active";
          } ?>
           <?php if ($this->uri->segment(2) == "postGallery") {
              echo "active";
            } ?>">
            <i class="nav-icon far fa-images"></i>
            <p>
              Galeri
            </p>
          </a>
        </li>
        <li class="nav-item has-treeview">
          <a href="<?= site_url('dashboard/viewallteacher') ?>" class="nav-link
          <?php if ($this->uri->segment(2) == "viewallteacher") {
            echo "active";
          } ?>
           <?php if ($this->uri->segment(2) == "postteacher") {
              echo "active";
            } ?>">
            <i class="nav-icon far fa-chalkboard-teacher"></i>
            <p>
              Tenaga Pendidik
            </p>
          </a>
        </li>
        <li class="nav-item has-treeview">
          <a href="<?= site_url('dashboard/viewalladministration') ?>" class="nav-link
          <?php if ($this->uri->segment(2) == "viewalladministration") {
            echo "active";
          } ?>
           <?php if ($this->uri->segment(2) == "postteacher") {
              echo "active";
            } ?>">
            <i class="nav-icon far fa-user-chart"></i>
            <p>
              Tata Usaha
            </p>
          </a>
        </li>
        <li class="nav-item has-treeview">
          <a href="<?= site_url('dashboard/facilitybox') ?>" class="nav-link
          <?php if ($this->uri->segment(2) == "facilitybox") {
            echo "active";
          } ?> ">
            <i class="nav-icon far fa-inbox"></i>
            <p>
              Kotak Sarana
            </p>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>