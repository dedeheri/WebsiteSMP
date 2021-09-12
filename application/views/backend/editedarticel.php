<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title><?= $tb_articel['post_title'] ?></title>
  <!-- css -->
  <?php $this->load->view('backend/_partikals/css.php') ?>

</head>

<body class="hold-transition sidebar-mini sidebar-collapse  layout-fixed">
  <div class="wrapper">
    <!-- Navbar -->
    <?php $this->load->view('backend/_partikals/navbar.php') ?>
    <!-- sidebar -->
    <?php $this->load->view('backend/_partikals/sidebar.php') ?>

    <!-- editor -->
    <div class="content-wrapper">
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Edit</h1>
            </div>
          </div>
        </div>
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-8">
              <div class="card card-outline">
                <?= form_open_multipart('dashboard/updateArticel') ?>
                <input type="hidden" name="id_post" value="<?= $tb_articel['id_post'] ?>">
                <div class="card-body pad">
                  <label for="post_title">Judul</label>
                  <textarea class="form-control mb-3" id="exampleFormControlTextarea1" rows="1" id="post_title" type="text" name="post_title"><?= $tb_articel['post_title'] ?></textarea>
                  <div class="mb-3">
                    <label for="post_main">Isi Berita</label>
                    <textarea id="post_main" name="post_main"><?= $tb_articel['post_main'] ?></textarea>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4 ">
              <div class="card card-outline sticky-top">
                <div class="card-body pad">
                  <div class="custom-file">
                    <input type="file" class=" custom-file-input" name='editimage' id="post_thumbnail">
                    <label for="post_thumbnail" class="custom-file-label">File</label>
                  </div>
                  <button type="submit" class="btn btn-primary mt-3">Kirim</button>
                  <a class="btn btn-secondary mt-3" href="<?= site_url('dashboard/viewallarticel') ?>">Kembali</a>
                </div>
                </form>
              </div>
            </div>
          </div>
      </section>
      <!-- /.content -->
    </div>
  </div>
  <!-- js -->
  <?php $this->load->view('backend/_partikals/js.php') ?>
  <script src="<?php echo base_url('assets/plugin/ckeditor/ckeditor.js') ?>"></script>
  <script>
    $(function() {
      CKEDITOR.replace('post_main', {
        filebrowserImageBrowseUrl: '<?php echo base_url('assets/plugin/kcfinder/browse.php'); ?>',
        height: '400px'
      });
    });
  </script>

</body>

</html>