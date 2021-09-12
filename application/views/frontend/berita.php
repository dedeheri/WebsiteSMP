<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?= $title ?></title>

  <!-- css -->
  <?php $this->load->view('frontend/_partikals/scriptcss') ?>
  <link rel="stylesheet" href="https://unpkg.com/placeholder-loading/dist/css/placeholder-loading.min.css">
</head>

<body>

  <!-- navbar -->
  <?php $this->load->view('frontend/_partikals/navbar') ?>

  <!-- main -->
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-11">
        <h3 class="mt-5 text-body text-center" data-aos="fade-up">Berita Sekolah</h3>
        <div class="row mt-5" data-aos="fade-up" data-aos-delay="200">
          <?php foreach ($tb_articel as $articel) : ?>
            <div class="col-md-4 mb-4">
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
  <?php $this->load->view('frontend/_partikals/footer') ?>

  <!-- js -->
  <?php $this->load->view('frontend/_partikals/scriptjs') ?>
</body>

</html>