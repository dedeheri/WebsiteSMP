<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Data Guru</title>
    <!-- Font Awesome Icons -->
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
                </div><!-- /.container-fluid -->
            </section>

            <section class="content-header">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <h1>Kotak Saran</h1>
                        </div>
                    </div>
                </div>
            </section>

            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <!-- /.card-header -->
                                <div class="card-body table-responsive p-0">
                                    <table class="table table-hover text-nowrap">
                                        <thead>
                                            <tr>
                                                <th>Nama</th>
                                                <th>Pesan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $i = 1;
                                            foreach ($tb_massage as $m) : ?>
                                                <tr class="hover-x">
                                                    <td> <a class="text-title" href="<?= base_url('dashboard/detailfb/') ?><?= $m->id_massage ?>"><?= $m->name_massage ?></a></td>
                                                    <td> <a class="text-title" href="<?= base_url('dashboard/detailfb/') ?><?= $m->id_massage ?>"><?= substr($m->content_massage, 0, 110) ?></a></td>
                                                    <td>
                                                        <a data-toggle="modal" data-target="#id<?= $m->id_massage ?>"><i class="far fa-trash-alt"></i></a>
                                                        <!-- modal -->
                                                        <div class="modal fade" id="id<?= $m->id_massage ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                                                        <a href="<?= base_url("dashboard/dlfb/"); ?><?= $m->id_massage ?>"><button type="button" class="btn btn-danger">Hapus</button></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- modal -->

        </div>

        <!-- js -->
        <?php $this->load->view('backend/_partikals/js.php') ?>
</body>

</html>