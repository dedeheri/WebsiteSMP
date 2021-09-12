<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title><?= $tb_massage['name_massage'] ?></title>
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
                            <h1>Pesan</h1>
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
                                                <div class="row">
                                                    <div class="col-md-1 mail-name"><?= $tb_massage['name_massage'] ?></div>
                                                    <div class="col-md-2 mail-email"><?= $tb_massage['email_massage'] ?></div>
                                                </div>
                                                <h6 class="mt-2"><?= $tb_massage['time_massage'] ?></h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mailbox-read-message">
                                        <p><?= $tb_massage['content_massage'] ?></p>
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