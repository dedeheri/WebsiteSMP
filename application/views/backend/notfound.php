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
            <div class="row justify-content-center">
                <div class="col-md-6 text-center">
                    <h4 class="  mt-230">Maaf, Halaman yang dicari tidak ditemukan !</h4>
                    <a href="<?= site_url('dashboard/admin') ?>" class="btn btn-primary mt-3"><i class="far fa-long-arrow-left"></i> Kembali</a>
                </div>
            </div>
        </div>
    </div>

    <!-- js -->
    <?php $this->load->view('backend/_partikals/js.php') ?>

</body>

</html>