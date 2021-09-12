<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title><?= $tb_articel['post_title']; ?></title>
    <!-- css  -->
    <?php $this->load->view('frontend/_partikals/scriptcss.php') ?>

</head>

<body>
    <!-- navbar -->
    <?php $this->load->view('frontend/_partikals/navbar.php') ?>

    <!-- main -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 ">
                <div class="row">
                    <div class="col-md-12 mt-70">
                        <h1 class="tittle-articel"><?= $tb_articel['post_title']; ?></h1>
                        <p class="time-post"><?= $tb_articel['post_time'] ?> oleh <span class="text-primary">Admin</span></p>
                    </div>
                    <div class="col-md-12" id="lightgallery">
                        <a href="<?= base_url() ?>assets/img/imgthum/<?= $tb_articel['post_image'] ?>">
                            <img src="<?= base_url() ?>assets/img/imgthum/<?= $tb_articel['post_image'] ?>" alt="" class="img-read">
                        </a>
                    </div>
                    <div class="col-md-12 ">
                        <div class="read-articel"><?= $tb_articel['post_main']; ?></div>
                        <div class="fb-comments" data-href="https://developers.facebook.com/docs/plugins/comments#configurator" data-width="100%" data-numposts="5"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- footer -->
    <?php $this->load->view('frontend/_partikals/footer.php') ?>
    <!-- js  -->
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v6.0"></script>
    <?php $this->load->view('frontend/_partikals/scriptjs.php') ?>
</body>

</html>