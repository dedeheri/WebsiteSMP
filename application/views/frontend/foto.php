<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Foto | SMP NEGRI 1 CISARUA</title>

  <!-- css -->
  <?php $this->load->view('frontend/_partikals/scriptcss') ?>
</head>

<body>
  <!-- navbar -->
  <?php $this->load->view('frontend/_partikals/navbar') ?>

  <!-- main -->
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-11">
        <h3 class="mt-70 text-body text-center" data-aos="fade-up">Galeri Sekolah</h3>
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

  <!-- footer -->
  <?php $this->load->view('frontend/_partikals/footer') ?>

  <!-- js -->
  <?php $this->load->view('frontend/_partikals/scriptjs') ?>

</body>

</html>