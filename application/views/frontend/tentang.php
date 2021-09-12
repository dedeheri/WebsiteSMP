<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Tentang Kami | SMP NEGRI 1 CISARUA</title>
  <!-- css -->
  <?php $this->load->view('frontend/_partikals/scriptcss') ?>
</head>

<body>

  <!-- navbar -->
  <?php $this->load->view('frontend/_partikals/navbar') ?>

  <!-- banner -->

  <!-- visi dan misi -->
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-11">
        <h3 class="text-tentang mt-70" data-aos="fade-up">“Menjadi Sekolah Yang Unggul dan Berprestasi”</h3>
        <div class="accordion" id="accordionExample" data-aos="fade-up" data-aos-delay="400">
          <div class="card mt-5">
            <div class="card-header card" id="headingOne">
              <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  <h4 class="card-title">Visi</h4>
                </button>
              </h2>
            </div>
            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
              <div class="card-body">
                <p class="text-about">
                  Dengan Indikator :
                  Menjadikan peserta didik yang Universal, Tangguh,Luwes dan Berpola,respresentatif, antisifasi.;
                  Universal artinya Umum; SMPN 1 Cisarua menerima siswa dari kalangan mana saja serta keluaran dari SD/MI manapun yang memiliki Ijazah Sah.
                  Tangguh : tangguh dalam arti memiliki kemampuan yang stabil dalam presasi dan prestise.
                  Luwes : Trampil beradapatasi, gagah,serta mempunyai karakter tutwurihandayani.Serta , Berpola : setiap kegiatan terjadwal mempunyai agenda kerja yang bertumpu pada kalender pendidikan.;
                  Respresentatif ; SMPN 1 Cisarua adalah sekolah yang nyaman fasilitas mendukung serta
                  kinerja kepala, guru dan staf yang kondusif.
                  Antisipasi ; artinya SMPN 1 Cisarua selalu menyiapkan hal-hal yang diperlukan dan siap
                  mengantisifasi kendala-permasalahan yang timbul sebab akibat, sesuai dengan amanat
                  wawasan wiyatamandala.
                </p>
              </div>
            </div>
          </div>
          <div class="card ">
            <div class="card-header" id="headingTwo">
              <h2 class="mb-0">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  <h4 class="card-title">Misi</h4>
                </button>
              </h2>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
              <div class="card-body">
                <p class="text-about">1.Meningkatkan keimanan dan ketaqwaan terhadap Tuhan Yang Maha Esa</p>
                <p class="text-about">2.Menciptakan Lingkungan yang Kondusif</p>
                <p class="text-about">3.Meningkatkan Kreativitas Peserta Didik</p>
                <p class="text-about">4.Mewujudkan Siswa yang mampu menghadapi tantangan zaman</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- tabel -->
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-11">
        <div class="row mt-70 mb-5">
          <div class="col-12">
            <div class="card" data-aos="fade-up">
              <div class="card-header">
                <h4 class="card-title">Profil Sekolah</h4>
                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                  </div>
                </div>
              </div>
              <div class="card-body table-responsive p-0 ">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>Nama Sekolah</th>
                      <th>Alamat</th>
                      <th>Desa/Kecamatan</th>
                      <th>Kab/Kota</th>
                      <th>Provinsi</th>
                      <th>No.Telpn/HP</th>
                      <th>NSS/MSM/NDS</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>SMP NEGRI 1 CISARUA</td>
                      <td>Jl. Ardimanggala-Cisarua</td>
                      <td>Cisarua/Cisarua</td>
                      <td>Sumedang</td>
                      <td>Jawa Barat</td>
                      <td>(0261) 211223</td>
                      <td>20 1 02 10 23 062</td>
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

  <!-- footer -->
  <?php $this->load->view('frontend/_partikals/footer') ?>
  <!-- js -->
  <?php $this->load->view('frontend/_partikals/scriptjs') ?>
</body>

</html>