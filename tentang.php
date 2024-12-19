<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tanah Longsor</title>
    <link rel="shortcut icon" href="assets/image/icon.png" type="image/x-icon" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@200;400;600;800&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="./assets/css/landingLayout.css" />
    <link rel="stylesheet" href="./assets/css/tentang.css" />
</head>

<body style="
      font-family: 'Plus Jakarta Sans', sans-serif;
      background-color: #f2e5bf;
      overflow-x: hidden;
    ">
    <nav class="navbar navbar-expand-lg navbar-light custom-navbar">
        <a class="navbar-brand" href="#">
            <img src="assets/image/logo.png" height="60" alt="Logo" />
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item" style="align-content: center;">
                    <a class="nav-link" href="index.php" style="color: black;">Beranda</a>
                </li>
                <li class="nav-item" style="align-content: center;">
                    <a class="nav-link" href="berita.php" style="color: black;">Berita</a>
                </li>
                <li class="nav-item" style="align-content: center;">
                    <a class="nav-link active" href="tentang.php" style="color: #cb6040;">Tentang</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <div class="call-center-button">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" height="1.5rem">
                                <path
                                    d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z" />
                            </svg>
                            <p>Call Center</p>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    <section style="background-image: url(./assets/image/short-banner.png); background-size: cover;">
        <div class="container text-center" style="padding-top: 3rem; padding-bottom: 6rem;">
            <div class="banner-content">
                <img src="assets/image/tittle.png" class="img-fluid" alt="Title Image" style="margin-top: 7rem;">
            </div>
        </div>
    </section>
    <section class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
                <h1 class="display-4" style="font-weight: 600;">PENYEBAB</h1>
                <p class="lead" style="margin: 0rem 2rem;">
                    Terdapat beberapa alasan mengapa dapat terjadi tanah longsor
                </p>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div id="news-slider" class="owl-carousel">
                            <?php  
                            include("dashboard/connect.php");  
                            $sqlpenyebab = "SELECT id, judul, deskripsi, img FROM penyebab;";  
                            $qpenyebab = mysqli_query($koneksi, $sqlpenyebab);  
                            while ($datapenyebab = mysqli_fetch_array($qpenyebab)) {  
                            ?>
                            <div class="post-slide">
                                <div class="post-img">
                                    <img src="assets/image/penyebab/<?= $datapenyebab['img'] ?>" />
                                </div>
                                <div class="post-content" style="min-height: 13rem;">
                                    <h3 class="post-title">
                                        <a><?= $datapenyebab['judul'] ?></a>
                                    </h3>
                                    <p class="post-description">
                                        <?= $datapenyebab['deskripsi'] ?>
                                    </p>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="row" style="background-color: #56503a;">
        <div class="col-1"></div>
        <div class="col-10" style="margin-bottom: 3rem;">
            <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
                <h1 class="display-4" style="font-weight: 600; color: #f2e5bf;">DAMPAK</h1>
                <p class="lead" style="color: #f2e5bf;">
                    Terdapat beberapa dampak yang dapat terjadi akibat tanah longsor
                </p>
            </div>
            <div class="row">
                <div class="col-5" style="background-color: #ffffff; border-radius: 10px;">
                    <h2 style="font-weight: 600;text-align: center; margin-top: 1rem;"> <span>&#43;</span> POSITIF
                        <span>&#43;</span>
                    </h2>
                    <div class="accordion" id="myAccordion">
                        <?php  
                        include("dashboard/connect.php");  
                        $sqlpositif = "SELECT id, judul, isi FROM dampak where status='Positif';";  
                        $qpositif = mysqli_query($koneksi, $sqlpositif);  
                        while ($datapositif = mysqli_fetch_array($qpositif)) {  
                        ?>
                        <div class="mb-1">
                            <div style="color: black; background-color: rgb(242, 229, 191); padding: 0.8rem; border-radius: 8px;margin-bottom: 1rem;cursor: pointer;text-wrap: wrap;"
                                data-toggle="collapse" href="#plus<?= $datapositif['id'] ?>" role="button"
                                aria-expanded="false" aria-controls="plus<?= $datapositif['id'] ?>">
                                <?= $datapositif['judul'] ?>
                            </div>
                            <div class="collapse" id="plus<?= $datapositif['id'] ?>" data-parent="#myAccordion">
                                <div class="card card-body mb-3"
                                    style="font-size: 1rem; background-color: rgba(242, 229, 191, 0.5);">
                                    <?= $datapositif['isi'] ?>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
                <div class="col-2"></div>
                <div class="col-5" style="background-color: #ffffff; border-radius: 10px;">
                    <h2 style="font-weight: 600;text-align: center; margin-top: 1rem;"> <span>&#8722;</span> NEGATIF
                        <span>&#8722;</span>
                    </h2>
                    <div class="accordion" id="myAccordionn">
                        <?php  
                        include("dashboard/connect.php");  
                        $sqlnegatif = "SELECT id, judul, isi FROM dampak where status='Negatif';";  
                        $qnegatif = mysqli_query($koneksi, $sqlnegatif);  
                        while ($datanegatif = mysqli_fetch_array($qnegatif)) {  
                        ?>
                        <div class="mb-1">
                            <div style="color: black; background-color: rgb(242, 229, 191); padding: 0.8rem; border-radius: 8px;margin-bottom: 1rem;cursor: pointer;text-wrap: wrap;"
                                data-toggle="collapse" href="#min<?= $datanegatif['id'] ?>" role="button"
                                aria-expanded="false" aria-controls="min<?= $datanegatif['id'] ?>">
                                <?= $datanegatif['judul'] ?>
                            </div>
                            <div class="collapse" id="min<?= $datanegatif['id'] ?>" data-parent="#myAccordionn">
                                <div class="card card-body mb-3"
                                    style="font-size: 1rem; background-color: rgba(242, 229, 191, 0.5);">
                                    <?= $datanegatif['isi'] ?>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="row featurette">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <div class="row" style="margin-top:2rem; margin-bottom: 2rem; justify-content: space-between;">
                <div class="col-md-4 ml-md-4 my-auto">
                    <div class="text-center text-md-left">
                        <h1 class="featurette-heading display-4" style="font-weight: 600;">
                            JENIS-JENIS
                        </h1>
                        <p class="lead">
                            Terdapat beberapa jenis tanah longsor
                        </p>
                    </div>
                </div>
                <div class="col-md-7 px-5 p-md-0">
                    <div class="bd-example">
                        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                                <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
                                <li data-target="#carouselExampleCaptions" data-slide-to="4"></li>
                                <li data-target="#carouselExampleCaptions" data-slide-to="5"></li>
                            </ol>
                            <div class="carousel-inner">
                                <?php  
                                include("dashboard/connect.php");  
                                $sqljenis = "SELECT id, judul, isi, img FROM jenis;";  
                                $qjenis = mysqli_query($koneksi, $sqljenis);  
                                $urut = 0;
                                while ($datajenis = mysqli_fetch_array($qjenis)) {  
                                ?>
                                <div class="carousel-item <?php if($urut < 1) {echo "active";}?>">
                                    <img src="assets/image/jenis/<?= $datajenis['img'] ?>" class="d-block w-100" />
                                    <div class="carousel-caption">
                                        <div class="flip-card">
                                            <div class="flip-card-inner">
                                                <div class="flip-card-front">
                                                    <h5><?= $datajenis['judul'] ?></h5>
                                                </div>
                                                <div class="flip-card-back">
                                                    <p><?= $datajenis['isi'] ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php $urut=4; } ?>
                                <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button"
                                    data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleCaptions" role="button"
                                    data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="row" style="background-color: #56503a; padding-bottom: 3rem; padding-top: 3rem;">
        <div class="d-block d-sm-none text-center">
            <h1 class="display-4" style="font-weight: 600;overflow-wrap: anywhere; color: #f2e5bf;">PENANGGULANGAN</h1>
            <p class="lead" style="color: #f2e5bf;font-size:1rem;margin: 1rem;">
                Terdapat beberapa penanggulangan yang dapat dilakukan ketika sedang atau setelah terjadi bencana
            </p>
        </div>
        <div class="col-sm-1"></div>
        <div class="col-sm-5 mx-3 mx-sm-0 my-auto">
            <div class="accordion" id="myAccordiont">
                <div class="mb-1">
                    <div style="color: black; background-color: rgb(242, 229, 191); padding: 0.8rem; border-radius: 8px;margin-bottom: 1rem;cursor: pointer;text-wrap: wrap;"
                        data-toggle="collapse" href="#before" role="button" aria-expanded="false"
                        aria-controls="before">
                        Tahap Bencana
                    </div>
                    <div class="collapse" id="before" data-parent="#myAccordiont">
                        <div class="card card-body mb-3"
                            style="font-size: 1rem; background-color: rgba(242, 229, 191, 0.8);">
                            <ul>
                                <?php  
                                include("dashboard/connect.php");  
                                $sqlbencana = "SELECT judul FROM penanggulangan where status='bencana';";  
                                $qbencana = mysqli_query($koneksi, $sqlbencana);  
                                while ($databencana = mysqli_fetch_array($qbencana)) {  
                                ?>
                                <li><?= $databencana['judul'] ?></li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="mb-1">
                    <div style="color: black; background-color: rgb(242, 229, 191); padding: 0.8rem; border-radius: 8px;margin-bottom: 1rem;cursor: pointer;text-wrap: wrap;"
                        data-toggle="collapse" href="#after" role="button" aria-expanded="false" aria-controls="after">
                        Tahap Pascabencana
                    </div>
                    <div class="collapse" id="after" data-parent="#myAccordiont">
                        <div class="card card-body mb-3"
                            style="font-size: 1rem; background-color: rgba(242, 229, 191, 0.8);">
                            <ul>
                                <?php  
                                include("dashboard/connect.php");  
                                $sqlpasca = "SELECT judul FROM penanggulangan where status='pasca';";  
                                $qpasca = mysqli_query($koneksi, $sqlpasca);  
                                while ($datapasca = mysqli_fetch_array($qpasca)) {  
                                ?>
                                <li><?= $datapasca['judul'] ?></li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-5 my-auto d-none d-sm-block">
            <div class="pricing-header">
                <h1 class="display-4" style="font-weight: 600;overflow-wrap: anywhere; color: #f2e5bf;">PENANGGULANGAN
                </h1>
                <p class="lead" style="color: #f2e5bf;">
                    Terdapat beberapa penanggulangan yang dapat dilakukan ketika sedang atau setelah terjadi bencana
                </p>
            </div>
        </div>
        <div class="col-1"></div>
    </section>
    <section class="row" style="margin-bottom: 4rem;">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
                <h1 class="display-4" style="font-weight: 600;">MITIGASI</h1>
                <p class="lead" style="margin: 0rem 2rem;">
                    Terdapat beberapa hal yang dapat dilakukan untuk mencegah tanah longsor
                </p>
            </div>
            <div class="container-fluid">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner row w-100 mx-auto">
                        <?php  
                            include("dashboard/connect.php");  
                            $sqlmitigasi = "SELECT id, nama, isi, img FROM mitigasi;";  
                            $qmitigasi = mysqli_query($koneksi, $sqlmitigasi);
                            $urut = 0;
                            while ($datamitigasi = mysqli_fetch_array($qmitigasi)) {  
                        ?>
                        <div class="carousel-item <?php if($urut < 1) {echo "active";}?>">
                            <div class="card">
                                <div class="row" style="padding: 1rem 2rem">
                                    <div class="col-sm-5 mx-auto my-auto">
                                        <img class="card-img-top img-fluid"
                                            src="assets/image/mitigasi/<?= $datamitigasi['img'] ?>"
                                            style="border-radius: 10px;">
                                    </div>
                                    <div class="col-sm-7 mx-auto my-auto">
                                        <h5 class="card-title mt-3 mt-sm-0" style="font-weight: 600;">
                                            <?= $datamitigasi['nama'] ?></h5>
                                        <p class="card-text text-justify"><?= $datamitigasi['isi'] ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php $urut=4; } ?>
                    </div>
                    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section style="background-color: #a7a086;">
        <footer class="bg-body-tertiary">
            <div class="row">
                <div class="col-6 py-3 pl-5" style="background-color: rgba(0, 0, 0, 0.05);">
                    <a class="text-body" href="copyright.php" style="color: black;">©2024 Copyright Kelompok 5 SIMB</a>
                </div>
                <div class="col-6 py-3 pr-5" style="background-color: rgba(0, 0, 0, 0.05); text-align: right;">
                    <a class="text-body" href="behind.php" style="color: black;">Behind The Web</a>
                </div>
            </div>
        </footer>
    </section>
    <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
    <script type="text/javascript"></script>
    <script src="assets/js/tentang.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>