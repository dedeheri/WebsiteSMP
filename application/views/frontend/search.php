<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!-- css -->
    <?php $this->load->view('frontend/_partikals/scriptcss') ?>
</head>

<body>
    <!-- navbar -->
    <?php $this->load->view('frontend/_partikals/navbar') ?>

    <!-- main -->

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-11 mt-5">
                <!-- search -->
                <div class="row justify-content-center" data-aos="fade-up">
                    <div class="col-md-8">
                        <form action="<?= base_url('search') ?>" method="get">
                            <div class="input-group mb-3 ">
                                <input type="text" class="form-control pd-form" placeholder="Cari artikel, guru, tata usaha" name="q" autofocus autocomplete="off">
                                <div class="input-group-append">
                                    <button class="btn btn-fm" type="submit"><i class="far fa-search pb-1"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- contenr -->
                <h5 class="search-text-parent mt-5" data-aos="fade-up" data-aos-delay="200">Pencarian Terkait : Berita | Guru | Staff TU </h5>
            </div>
        </div>
    </div>

    <!-- footer -->
    <?php $this->load->view('frontend/_partikals/footer') ?>

    <!-- js -->
    <?php $this->load->view('frontend/_partikals/scriptjs') ?>

</body>

</html>