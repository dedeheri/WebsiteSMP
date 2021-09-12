<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!-- css -->
    <?php $this->load->view('frontend/_partikals/scriptcss') ?>    
</head>
<body>
<!-- navbar -->
<?php $this->load->view('frontend/_partikals/navbar') ?>

<!-- main -->


<div class="container">
<h4 class="text-center text-tentang mt-70" data-aos="fade-up">Galeri Video</h4><div class="row justify-content-center mt-5">
        <div class="col-md-11">
            <div class="row">
            <div class="col-md-4">
            <div class="embed-responsive embed-responsive-16by9">
                <iframe width="853" height="480" src="https://www.youtube.com/embed/Xt3m04Tscc8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>        
        </div>
        <div class="col-md-4">
            <div class="embed-responsive embed-responsive-16by9">
                <iframe width="853" height="480" src="https://www.youtube.com/embed/Xt3m04Tscc8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
        <div class="col-md-4">
            <div class="embed-responsive embed-responsive-16by9">
                <iframe width="853" height="480" src="https://www.youtube.com/embed/Xt3m04Tscc8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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