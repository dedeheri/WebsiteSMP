<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Organisasi | SMP NEGRI 1 CISARUA</title>

    <!-- css -->
    <?php $this->load->view('frontend/_partikals/scriptcss.php') ?>
</head>

<body>

    <!-- navbar -->
    <?php $this->load->view('frontend/_partikals/navbar.php') ?>
    <!-- main -->

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-11">
                <div class="text-body text-center mt-70" data-aos="fade-up">Organisasi</div>
                <div class="mt-5" data-aos="fade-up" data-aos-delay="200">
                    <div id="lightgallery" class="gallery-picture">
                        <?php foreach ($tb_organization as $organization) : ?>
                            <a href="<?= base_url() ?>assets/img/imgorgns/<?= $organization->image_organization ?>" data-sub-html="<?= $organization->description_organization ?>">
                                <img src="<?= base_url() ?>assets/img/imgorgns/<?= $organization->image_organization ?>" alt="" class="card-img-top card" height="1000px">
                            </a>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- footer -->
    <?php $this->load->view('frontend/_partikals/footer.php') ?>
    <!-- js -->
    <?php $this->load->view('frontend/_partikals/scriptjs.php') ?>

</body>

</html>