<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kontak Kami | SMP NEGRI 1 CISARUA</title>

    <!-- load css -->
    <?php $this->load->view('frontend/_partikals/scriptcss.php') ?>
</head>

<body>
    <!-- navbar -->
    <?php $this->load->view('frontend/_partikals/navbar.php') ?>

    <!-- main -->

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 ">
                <div class="text-body text-center mt-70" data-aos="fade-up">Kontak</div>
                <div class="row mt-130" data-aos="fade-up" data-aos-delay="200">
                    <div class="col-md-4">
                        <div class="text-center bg-katagori">
                            <i class="far fa-map-marked-alt icon-size"></i>
                            <h2 class="text-katagori">Alamat</h2>
                            <p class="sub-text-katagori">Jl. Ardimanggala-Cisarua Cisarua/Cisarua Sumedang Jawa Barat</p>
                        </div>

                    </div>
                    <div class="col-md-4">
                        <div class="text-center bg-katagori">
                            <i class="far fa-envelope-open-text icon-size"></i>
                            <h2 class="text-katagori">E-mail</h2>
                            <p class="sub-text-katagori">mail@mail.com</p>
                        </div>

                    </div>
                    <div class="col-md-4">
                        <div class="text-center bg-katagori">
                            <i class="far fa-phone icon-size"></i>
                            <h2 class="text-katagori">Telepon</h2>
                            <p class="sub-text-katagori">(0261) 211223</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-11">
                <div class="row mt-130" data-aos="fade-up">
                    <div class="col-md-6  ">
                        <h3 class="text-body ">Pesan</h3>
                        <?php if ($this->session->flashdata('flash')) : ?>
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>Terima Kasih!</strong>
                                <?= $this->session->flashdata('flash'); ?>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        <?php endif; ?>
                        <form action="" method="post">
                            <div class="form-row mt-5">
                                <div class="col">
                                    <input type="text" class="form-control border bg-white" placeholder="Nama Lengkap" id="name" name="name_massage">
                                    <small class="form-text text-danger"><?= form_error('name_massage') ?></small>
                                </div>
                                <div class="col">
                                    <input type="text" class="form-control border bg-white" placeholder="Email" id="email" name="email_massage">
                                    <small class="form-text text-danger"><?= form_error('email_massage') ?></small>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <textarea class="form-control border bg-white" id="isi" rows="6" placeholder="Masukan pesan anda..." name="content_massage"></textarea>
                                <small class="form-text text-danger"><?= form_error('content_massage') ?></small>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block mt-4">KIRIM PESAN</button>
                        </form>
                    </div>
                    <div class="col-md-6">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2355.5537101565615!2d107.96603194804732!3d-6.824048798603258!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68d40f0b122a33%3A0x2578fee02d35ae27!2sSMP%20Negeri%201%20Cisarua!5e0!3m2!1sen!2sid!4v1581020041436!5m2!1sen!2sid" width="200" height="250" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                        </div>
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