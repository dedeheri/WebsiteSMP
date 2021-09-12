<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>404 | SMP NEGRI 1 CISARUA</title>

    <!-- css -->
    <?php $this->load->view('frontend/_partikals/scriptcss') ?>
</head>

<body>
    <!-- navbar -->
    <?php $this->load->view('frontend/_partikals/navbar') ?>

    <!-- main -->
    <div class="container">
        <div class="row justify-content-center ">
            <div class="col-md-11">
                <div class="row text-center mt-70">
                    <div class="col">
                        <div class="t-404" data-aos="fade-up">404</div>
                        <div class="t-404-m" data-aos="fade-up" data-aos-delay="200">
                            Kami tidak dapat menemukan halaman ini.
                        </div>
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