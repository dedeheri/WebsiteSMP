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
    <!-- main -->
    <!-- <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-6">
                <div class="card p-5">
                    <img src="<?= base_url('assets/img/logo.png') ?>" alt="" class="img-login">
                    <h3 class="sign-text text-center">Buat Akun</h3>
                    <?= $this->session->flashdata('alrigtlogin') ?>
                    <form method="post" action="<?= base_url('auth/registration') ?>">
                        <div class="form-group">
                            <label for="nama">Nama Lengkap</label>
                            <input type="text" class="form-control" id="Nama" name="name" value="<?= set_value('name') ?>">
                            <?= form_error('name', '<small class="text-danger">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" id="email" name="email" value="<?= set_value('email') ?>">
                            <?= form_error('email', '<small class="text-danger">', '</small>') ?>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="sandi">Kata Sandi</label>
                                    <input type="password" class="form-control" id="sandi" name="password1">
                                    <?= form_error('password1', '<small class="text-danger">', '</small>') ?>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="ulang">Ulang Kata Sandi</label>
                                    <input type="password" class="form-control" id="ulang" name="password2">
                                    <?= form_error('password2', '<small class="text-danger">', '</small>') ?>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 ">
                                <div class="form-check  mt-3 float-left">
                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                    <label class="form-check-label" for="defaultCheck1">
                                        Ingatan Saya
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <a href="#">
                                    <p class=" mt-3 float-right newacu">Lupa Password?</p>
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <a href="<?= site_url('auth') ?>" class="float-left mt-5 newacu">Login</a>
                            </div>
                            <div class="col-md-6">
                                <button type="submit" name="add" class="btn btn-primary mt-5 float-right">Buat</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div> -->

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5 mt-10">
                <div class="card shadow-lg">
                    <div class="card-header bg-primary">
                        <h4>Buat Akun</h4>
                    </div>
                    <form action="<?= base_url('signup/newaccounts/thaY4VUp3pdSXiBHVbIdbHSiyiLgXLAnzePwHCMLNTbqAFNG44p3ceeQAseCahZYEwXpSltPRm1rwWVKs4HXD3nFGSZj6CsshNLh') ?>" method="post">
                        <div class="pl-5 pr-5 mt-5">
                            <?= $this->session->flashdata('alrigtlogin') ?>
                            <div class="input-group mb-2 mr-sm-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fas fa-user"></i></div>
                                </div>
                                <input type="text" class="form-control" id="inlineFormInputGroupUsername2" placeholder="Nama Lengkap" name="name" value="<?= set_value('name') ?>">
                                <?= form_error('name', '<small class="text-danger mb-2">', '</small>') ?>
                            </div>
                            <div class="input-group mb-2 mr-sm-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fas fa-envelope"></i></div>
                                </div>
                                <input type="text" class="form-control" id="email" placeholder="Email" name="email" value="<?= set_value('email') ?>">
                            </div>
                            <?= form_error('email', '<small class="text-danger mb-2">', '</small>') ?>
                            <div class="input-group mb-2 mr-sm-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fas fa-lock"></i></div>
                                </div>
                                <input type="password" class="form-control" id="inlineFormInputGroupUsername2" placeholder="Kata Sandi" name="password1">
                            </div>
                            <?= form_error('password1', '<small class="text-danger mb-2">', '</small>') ?>
                            <div class="input-group mb-2 mr-sm-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fas fa-lock"></i></div>
                                </div>
                                <input type="password" class="form-control" id="inlineFormInputGroupUsername2" placeholder="Kata Sandi" name="password2">
                            </div>
                            <?= form_error('password2', '<small class="text-danger mb-2">', '</small>') ?>
                            <button type="submit" class="btn btn-primary mb-2 mt-5 btn-block">Buat Akun</button>
                            <a href="<?= site_url('auth') ?>" class="btn btn-success mt-2 btn-block mb-4">Masuk</a>
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