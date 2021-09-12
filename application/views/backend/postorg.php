<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Organisasi</title>
    <!-- css -->
    <?php $this->load->view('backend/_partikals/css.php') ?>

</head>

<body class="hold-transition sidebar-mini sidebar-collapse layout-fixed">
    <div class="wrapper">
        <!-- Navbar -->
        <?php $this->load->view('backend/_partikals/navbar.php') ?>
        <!-- sidebar -->
        <?php $this->load->view('backend/_partikals/sidebar.php') ?>

        <!-- main -->
        <div class="content-wrapper">
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6 mt-4">
                            <h1>Unggah Data Baru</h1>
                        </div>
                    </div>
                </div>
            </section>
            <div class="content">
                <div class="content-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-outline">
                                <div class="row justify-content-center">
                                    <div class="col-md-8 mt-5 mb-4">
                                        <div class="card-body">
                                            <?= form_open_multipart('dashboard/postOrg') ?>
                                            <div class="alert alert-info alert-dismissible fade show" role="alert">
                                                Untuk menghindari <strong>Terjadi Kesalahan!</strong>, batas upload gambar maksimal 8MB dan hindari ektansi selain jpg, png dan gif.
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <?= $this->session->flashdata('flash') ?>
                                            <label for="description_gallery">Deskripsi</label>
                                            <textarea class="form-control mb-3" rows="3" id="description_gallery" type="text" name="description_organization"></textarea>
                                            <small class="form-text text-danger"></small>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="customFile" name="picture_gallery">
                                                <label class="custom-file-label" for="customFile">Pilih</label>
                                            </div>
                                            <button type="submit" class="btn btn-primary mt-3 float-right ml-3">Kirim</button>
                                            <a href="" class="btn btn-secondary mt-3 float-right">Batal</a>
                                            </form>
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