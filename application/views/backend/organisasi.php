<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Organisasi</title>
    <?php $this->load->view('backend/_partikals/css.php') ?>
</head>

<body class="hold-transition sidebar-mini sidebar-collapse layout-fixed ">

    <div class="wrapper">
        <!-- Navbar -->
        <?php $this->load->view('backend/_partikals/navbar.php') ?>
        <!-- sidebar -->
        <?php $this->load->view('backend/_partikals/sidebar.php') ?>

        <!-- main -->
        <div class="content-wrapper ">
            <section class="content-header">
                <div class="container-fluid">
                    <?php if ($this->session->flashdata('flash')) : ?>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <?= $this->session->flashdata('flash'); ?>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </section>

            <section class="content-header">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <h1>Organisasi</h1>
                        </div>
                        <div class="col-md-6">
                            <a href="<?= site_url('dashboard/postOrg') ?>" class="btn btn-primary float-right">Tambah Data</a>
                        </div>
                    </div>
                </div>
            </section>

            <div class="content">
                <div class="content-fluid">
                    <div class="card">
                        <div class="ml-3 mr-3 mt-3 mb-3">
                            <div class="row">
                                <?php foreach ($tb_organization as $organization) : ?>
                                    <div class="col-md-12">
                                        <a href="#" data-toggle="modal" data-target="#modal<?= $organization->id_organization ?>">
                                            <div class="card">
                                                <img class="card-img-top gallery-rad" src="<?= base_url() ?>assets/img/imgorgns/<?= $organization->image_organization ?>" alt="Card image " style="height: 1000px;">
                                            </div>
                                        </a>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- modal -->
        <?php foreach ($tb_organization as $organization) : ?>
            <div class="modal animated zoomin faster bd-example-modal-lg" id="modal<?= $organization->id_organization ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <a data-toggle="modal" data-target="#id<?= $organization->id_organization ?>">
                                <div class="dlgallerypoint">Hapus</div>
                            </a>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body ">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-12">
                                        <img src="<?= base_url() ?>assets/img/imgorgns/<?= $organization->image_organization ?>" alt="" class="img-fluid">
                                        <h4 class="mt-2 text-center"><?= $organization->description_organization ?></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="modal fade" id="id<?= $organization->id_organization ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel"></h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            Setelah di hapus, data tidak dapat diurungkan!
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                            <a href="<?= base_url("dashboard/deleteorg/"); ?><?= $organization->id_organization ?>"><button type="button" class="btn btn-danger">Hapus</button></a>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>


        <!-- js -->
        <?php $this->load->view('backend/_partikals/js.php') ?>
</body>

</html>