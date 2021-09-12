<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Aktivitas</title>

    <?php $this->load->view('backend/_partikals/css.php') ?>
</head>

<body class="hold-transition sidebar-mini sidebar-collapse layout-fixed">

    <div class="wrapper">
        <!-- Navbar -->
        <?php $this->load->view('backend/_partikals/navbar.php') ?>
        <!-- sidebar -->
        <?php $this->load->view('backend/_partikals/sidebar.php') ?>

        <!-- main -->
        <div class="content-wrapper ">

            <section class="content-header">
                <div class="container-fluid mt-4">
                    <div class="row">
                        <div class="col-sm-6" data-aos="fade-up">
                            <h1>Aktivitas</h1>
                        </div>
                    </div>
                </div>
            </section>


            <div class="content">
                <div class="content-fluid">
                    <div class="row" data-aos="fade-up">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Berita</h3>
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <?php foreach ($tb_articel as $articel) : ?>
                                            <div class="col-md-2 text-muted"><?= $articel->post_time ?></div>
                                            <div class="col-md-10 ">
                                                <a href="<?= base_url("dashboard/detailarticel/"); ?><?= $articel->post_slug ?>">
                                                    <div class="text-title"><?= $articel->post_title ?></div>
                                                </a>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row" data-aos="fade-up" data-aos-delay="200">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Data Guru</h3>
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <?php foreach ($tb_teacher as $teacher) : ?>
                                            <div class="col-md-4 text-muted"><?= $teacher->time_teacher ?></div>
                                            <div class="col-md-8">
                                                <a href="<?= base_url('dashboard/detailteacher/') ?><?= $teacher->slug_teacher ?>">
                                                    <div class="text-title"><?= $teacher->name_teacher ?></div>
                                                </a>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Data Tata Usaha</h3>
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <?php foreach ($tb_administration as $administration) : ?>
                                            <div class="col-md-4 text-muted mt-2"><?= $administration->time_administration ?></div>
                                            <div class="col-md-7 ">
                                                <a href="<?= base_url("dashboard/detailAdm/"); ?><?= $administration->slug_administration ?>">
                                                    <div class="text-title"><?= $administration->name_administration ?></div>
                                                </a>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- js -->
    <?php $this->load->view('backend/_partikals/js.php') ?>

</body>

</html>