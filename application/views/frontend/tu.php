<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tata Usaha | SMP NEGRI 1 CISARUA</title>

    <!-- css -->
    <?php $this->load->view('frontend/_partikals/scriptcss') ?>
</head>

<body>
    <!-- navbar -->
    <?php $this->load->view('frontend/_partikals/navbar') ?>
    <!-- main -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-11">
                <h3 class="text-tentang text-center mt-70" data-aos="fade-up">Tata Usaha</h3>
                <div class="row mt-5" data-aos="fade-up" data-aos-delay="200">
                    <?php foreach ($tb_administration as $administration) : ?>
                        <div class="col-md-4 mb-4">
                            <a href="#" data-toggle="modal" data-target="#modal<?= $administration->id_administration ?>">
                                <div class="card">
                                    <img class="card-img-top" src="<?= base_url() ?>assets/img/imgadm/<?= $administration->image_administration ?>" alt="Card image cap" style="height: 300px;">
                                    <div class="card-body">
                                        <h5 class="card-title text-center"><?= $administration->name_administration ?></h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>

    </div>


    <!-- Modal -->
    <?php foreach ($tb_administration as $administration) : ?>
        <div class="modal animated zoomin faster bd-example-modal-lg" id="modal<?= $administration->id_administration ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel"><?= $administration->name_administration ?></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body ">
                        <div class="container-fluid">
                            <div class="row">

                                <div class="col-md-4">
                                    <img src="<?= base_url() ?>assets/img/imgadm/<?= $administration->image_administration ?>" alt="" class="img-fluid img-guru">
                                </div>
                                <div class="col-md-8">
                                    <div class="border-radius">
                                        <table class="table">
                                            <tbody>
                                                <tr>
                                                    <td>NIP</td>
                                                    <td>: <?= $administration->nip_administration ?></td>
                                                </tr>
                                                <tr>
                                                    <td>NUPTK</td>
                                                    <td>: <?= $administration->nuptk_administration ?></td>
                                                </tr>
                                                <tr>
                                                    <td>TTL</td>
                                                    <td>: <?= $administration->ttl_administration ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Pendidikan</td>
                                                    <td>: <?= $administration->education_administration ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Status</td>
                                                    <td>: <?= $administration->status_administration ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Alamat</td>
                                                    <td>: <?= $administration->address_administration ?></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>


    <!-- footer -->
    <?php $this->load->view('frontend/_partikals/footer') ?>
    <!-- js -->
    <?php $this->load->view('frontend/_partikals/scriptjs') ?>
</body>

</html>