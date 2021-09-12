<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title><?= $tb_articel['post_title']; ?></title>
    <?php $this->load->view('backend/_partikals/css.php') ?>
</head>

<body class="hold-transition sidebar-mini sidebar-collapse layout-fixed">
    <div class="wrapper">

        <!-- Navbar -->
        <?php $this->load->view('backend/_partikals/navbar.php') ?>
        <!-- sidebar -->
        <?php $this->load->view('backend/_partikals/sidebar.php') ?>
        <div class="content-wrapper">
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Tinjau</h1>
                        </div>
                    </div>
                </div>
            </section>
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-primary ">
                                <div class="card-body p-0">
                                    <div class="mailbox-read-info">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h5><?= $tb_articel['post_title']; ?></h5>
                                                <h6 class="text-muted mt-1"><?= $tb_articel['post_time'] ?></h6>
                                                <img src="<?= base_url() ?>assets/img/imgthum/<?= $tb_articel['post_image'] ?>" class="img-fluid" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mailbox-read-message">
                                        <p><?= $tb_articel['post_main']; ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <!-- js -->
    <?php $this->load->view('backend/_partikals/js.php') ?>
</body>

</html>