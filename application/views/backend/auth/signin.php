<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <!-- css -->
    <?php $this->load->view('backend/_partikals/css.php') ?>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5 mt-10">
                <div class="card shadow-lg">
                    <h1 class="mt-3 mb-3 text-center">Login</h1>
                    <form action="<?= base_url('auth'); ?>" method="post">
                        <div class="pl-5 pr-5 mt-5">
                            <?= $this->session->flashdata('alertlogin') ?>
                            <div class="input-group mb-2 mr-sm-2">
                                <input type="text" class="form-control" id="inlineFormInputGroupUsername2" placeholder="Email" name="email">
                            </div>
                            <?= form_error('email', '<small class="text-danger">', '</small>') ?>
                            <div class="input-group mb-2 mr-sm-2">
                                <input type="password" class="form-control" id="inlineFormInputGroupUsername2" placeholder="Kata Sandi" name="password">
                            </div>
                            <?= form_error('password', '<small class="text-danger">', '</small>') ?>
                            <button type="submit" class="btn btn-primary mb-2 mt-5 btn-block">Masuk</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

    <!-- js -->
    <?php $this->load->view('backend/_partikals/js.php') ?>
</body>

</html>