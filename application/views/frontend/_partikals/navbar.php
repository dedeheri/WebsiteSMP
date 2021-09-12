<nav class="navbar navbar-expand-lg  navbar-light bg-navbar sticky-top">
  <div class="container pl-6 pr-6">
    <a class="navbar-brand" href="<?= site_url('welcome') ?>">
      <img class="brand-logo" src="<?= base_url('assets/img/logo.png')?>" width="40" height="40" class="d-inline-block align-top" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <i class="far fa-bars"></i>
    </button>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
        <li class="nav-item">
          <a class="nav-link <?php if($this->uri->segment(1)=="welcome"){echo "active-link";}?>" href="<?= site_url('welcome') ?>">Beranda <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link  <?php if($this->uri->segment(1)=="news"){echo "active-link";}?>" href="<?= site_url('news') ?>">Berita</a>
        </li>
        <li class="nav-item">
            <a class="nav-link <?php if($this->uri->segment(1)=="photos"){echo "active-link";}?>" href="<?= site_url('photos') ?>">Foto</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle <?php if($this->uri->segment(1)=="about"){echo "active-link";}?> <?php if($this->uri->segment(1)=="teachers"){echo "active-link";}?> <?php if($this->uri->segment(1)=="administration"){echo "active-link";}?> <?php if($this->uri->segment(1)=="organization"){echo "active-link";}?>" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Profil <i class="far fa-chevron-down"></i>
          </a>
          <div class="dropdown-menu animated zoomin faster " aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item <?php if($this->uri->segment(1)=="about"){echo "active-link";}?>" href="<?= site_url('about') ?>">Tentang Kami</a>
            <a class="dropdown-item  <?php if($this->uri->segment(1)=="teachers"){echo "active-link";}?>" href="<?= site_url('teachers') ?>">Pendidik</a>
            <a class="dropdown-item  <?php if($this->uri->segment(1)=="administration"){echo "active-link";}?>" href="<?= site_url('administration') ?>">Tata Usaha</a>
            <a class="dropdown-item <?php if($this->uri->segment(1)=="organization"){echo "active-link";}?>" href="<?= site_url('organization') ?>">Organisasi</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle <?php if($this->uri->segment(1)=="facilities"){echo "active-link";}?> <?php if($this->uri->segment(1)=="extracurricular"){echo "active-link";}?> " href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Sarana <i class="far fa-chevron-down"></i>
          </a>
          <div class="dropdown-menu animated zoomin faster" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item <?php if($this->uri->segment(1)=="facilities"){echo "active-link";}?>" href="<?= site_url('facilities') ?>">Fasilitas</a>
            <a class="dropdown-item <?php if($this->uri->segment(1)=="extracurricular"){echo "active-link";}?>" href="<?= site_url('extracurricular') ?>">Extrakulikuler</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php if($this->uri->segment(1)=="contact"){echo "active-link";}?>" href="<?= site_url('contact') ?>">Kontak</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

