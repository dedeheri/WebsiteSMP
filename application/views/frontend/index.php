<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?= $title ?></title>
  <?php $this->load->view('frontend/_partikals/scriptcss.php') ?>
  <link rel="stylesheet" href="https://unpkg.com/placeholder-loading/dist/css/placeholder-loading.min.css">
</head>

<body class="pace-primary">

  <!-- navbar -->

  <?php $this->load->view('frontend/_partikals/navbar.php') ?>

  <!-- banner -->
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-11 mt-5">
        <div class="row ">
          <div class="col-md-6 banner-text">
            <h1 class="display-4 " data-aos="fade-up">Selamat datang di Website resmi SMP NEGRI 1<span> CISARUA</span></h1>
            <p class="sub-text-tentang" data-aos="fade-up" data-aos-delay="200">Dengan Indikator : Menjadikan peserta didik yang Universal, Tangguh,Luwes dan Berpola,respresentatif, antisifasi.</p>
          </div>
          <div class="col-md-6 mt-3">
            <img src="<?= ('assets/img/tropy.svg') ?>" alt="" class="img-fluid img-hero" data-aos="fade-up" data-aos-delay="300">
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- fitur -->
  <div class="container">
    <div class="row justify-content-center mt-130">
      <div class="col-md-10">
        <div class="row mt-5" data-aos="fade-up">
          <div class="col-md-4">
            <a href="<?= base_url('about') ?>">
              <div class="text-center bg-katagori-1">
                <i class="far fa-user-graduate icon-size"></i>
                <h2 class="text-katagori">Tentang Kami</h2>
                <p class="sub-text-katagori">Sedikit tentang kami,Menjadi Sekolah Yang Unggul dan Berprestasi.</p>
              </div>
            </a>
          </div>
          <div class="col-md-4">
            <a href="<?= base_url('facilities') ?>">
              <div class="text-center bg-katagori-2">
                <i class="far fa-university icon-size"></i>
                <h2 class="text-katagori">Fasilitas</h2>
                <p class="sub-text-katagori">Fasilitas yang baik, menunjang kreatifitas peserta didik.</p>
              </div>
            </a>
          </div>
          <div class="col-md-4">
            <a href="<?= base_url('extracurricular') ?>">
              <div class="text-center bg-katagori-3">
                <i class="far fa-basketball-hoop icon-size"></i>
                <h2 class="text-katagori">Extrakulikuler</h2>
                <p class="sub-text-katagori">Kegiatan non-pelajaran formal yang dilakukan peserta didik sekolah</p>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- gallery -->
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-11">
        <h3 class="mt-130 text-body text-center" data-aos="fade-up">Galeri Sekolah</h3>
        <div class="card-columns mt-5" data-aos="fade-up" data-aos-delay="200">
          <div id="lightgallery" class="gallery-picture">
            <?php foreach ($tb_gallery as $gallery) : ?>
              <a href="<?= base_url() ?>assets/img/imgmedia/<?= $gallery->image_gallery ?>" data-sub-html="<?= $gallery->description_gallery ?>">
                <img src="<?= base_url() ?>assets/img/imgmedia/<?= $gallery->image_gallery ?>" alt="" class="card-img-top card">
              </a>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- artikel -->
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-11">
        <h3 class="mt-130 text-body text-center" data-aos="fade-up">Berita Sekolah</h3>
        <div class="row mt-5" data-aos="fade-up" data-aos-delay="200">
          <?php foreach ($tb_articel as $articel) : ?>
            <div class="col-md-4">
              <a href="<?= base_url('news/' . $articel->post_slug); ?>" class="arc-text">
                <div class=" card">
                  <img src="<?= base_url() ?>assets/img/imgthum/<?= $articel->post_image ?>" class="card-img-top img-size" alt="...">
                  <div class="card-body">
                    <h5 class="card-title pl-3"><?= substr($articel->post_title, 0, 20) ?>...</h5>
                    <div class="card-text pl-3"><?= substr($articel->post_main, 0, 65) ?>...</div>
                    <p class="time-post pl-3"><?= $articel->post_time ?> oleh <span class="text-primary">Admin</span></p>
                  </div>
                </div>
              </a>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>

  <!-- footer -->
  <?php $this->load->view('frontend/_partikals/footer.php') ?>
  <!-- script -->
  <?php $this->load->view('frontend/_partikals/scriptjs') ?>
</body>

</html>