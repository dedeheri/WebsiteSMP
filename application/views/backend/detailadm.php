<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title><?= $tb_administration['name_administration']; ?></title>
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
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Data Guru</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row ">
                                <div class="col-md-3">
                                    <img src="<?= base_url() ?>assets/img/imgadm/<?= $tb_administration['image_administration'] ?>" alt="" class="img-fluid h-img-teacher">
                                </div>
                                <div class="col-md-9">
                                    <div class="border">
                                        <table class="table">
                                            <tbody>
                                                <tr>
                                                    <td>NIP</td>
                                                    <td><?= $tb_administration['nip_administration']; ?></td>
                                                </tr>
                                                <tr>
                                                    <td>NUPTK</td>
                                                    <td><?= $tb_administration['nuptk_administration'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td>TTL</td>
                                                    <td><?= $tb_administration['ttl_administration'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Pendidikan</td>
                                                    <td><?= $tb_administration['education_administration'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Status</td>
                                                    <td><?= $tb_administration['status_administration'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Alamat</td>
                                                    <td><?= $tb_administration['address_administration'] ?></td>
                                                </tr>
                                            </tbody>
                                        </table>
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