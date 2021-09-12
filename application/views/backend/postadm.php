<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Tenaga Kependidikan</title>
    <!-- css -->
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
                            <h1>Data Tata Usaha</h1>
                        </div>
                    </div>
                </div>
            </section>

            <div class="content">
                <div class="content-fluid">
                    <div class="card card-outline">
                        <?= form_open_multipart('dashboard/postAdm') ?>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Foto</label>
                                        <div class="col-sm-10 ">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="customFile" name="image_administration">
                                                <label class="custom-file-label" for="customFile">Choose file</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="nama" name="name_administration">
                                            <small class="form-text text-danger"><?= form_error('name_administration') ?></small>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="nip" class="col-sm-2 col-form-label">NIP</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="nip" name="nip_administration">
                                            <small class="form-text text-danger"><?= form_error('nip_administration') ?></small>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="nuptk" class="col-sm-2 col-form-label">NUPTK</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="nuptk" name="nuptk_administration">
                                            <small class="form-text text-danger"><?= form_error('nuptk_administration') ?></small>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="ttl" class="col-sm-2 col-form-label">Tempat Tanggal Lahir</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="ttl" name="ttl_administration">
                                            <small class="form-text text-danger"><?= form_error('ttl_administration') ?></small>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="pendidikan" class="col-sm-2 col-form-label">Pendidikan</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="pendidikan" name="education_administration">
                                            <small class="form-text text-danger"><?= form_error('education_administration') ?></small>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="status" class="col-sm-2 col-form-label">Status</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="status" name="status_administration">
                                            <small class="form-text text-danger"><?= form_error('status_administration') ?></small>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="alamat" name="address_administration">
                                            <small class="form-text text-danger"><?= form_error('address_administration') ?></small>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary float-right" name="post_administration">Tambah Data</button>
                                    <a href="<?= base_url('dashboard/viewalladministration') ?>" class="btn btn-secondary float-right mr-2" name="post_teacher">Batal</a>
                                </div>
                                <!--- end -->
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- js -->
    <?php $this->load->view('backend/_partikals/js.php') ?>

</body>

</html>