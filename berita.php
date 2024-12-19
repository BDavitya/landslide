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
    <link rel="stylesheet" href="./assets/css/landingLayout.css" />
    <link rel="stylesheet" href="./assets/css/berita.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
    #myText {
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    a,
    a:hover {
        text-decoration: none;
        transition: color 0.3s ease-in-out;
    }

    #pageHeaderTitle {
        margin: 2rem 0;
        text-transform: uppercase;
        text-align: center;
        font-size: 2.5rem;
    }

    .postcard {
        flex-wrap: wrap;
        display: flex;
        box-shadow: 0 4px 21px -12px rgba(0, 0, 0, 0.66);
        border-radius: 10px;
        margin: 0 0 2rem 0;
        overflow: hidden;
        position: relative;
        color: #ffffff;

        &.light {
            background-color: #c7b78a;
        }

        .t-dark {
            color: #18151f;
        }

        a {
            color: inherit;
        }

        h1,
        .h1 {
            margin-bottom: 0.5rem;
            font-weight: 500;
            line-height: 1.2;
        }

        .small {
            font-size: 80%;
        }

        .postcard__title {
            font-size: 1.75rem;
        }

        .postcard__img {
            max-height: 180px;
            width: 100%;
            object-fit: cover;
            position: relative;
        }

        .postcard__img_link {
            display: contents;
        }

        .postcard__bar {
            width: 50px;
            height: 10px;
            margin: 10px 0;
            border-radius: 5px;
            background-color: #56503a;
            transition: width 0.2s ease;
        }

        .postcard__text {
            padding: 1.5rem;
            position: relative;
            display: flex;
            flex-direction: column;
        }

        .postcard__preview-txt {
            overflow: hidden;
            text-overflow: ellipsis;
            text-align: justify;
            height: 100%;
        }

        .postcard__tagbox {
            display: flex;
            flex-flow: row wrap;
            font-size: 14px;
            margin: 20px 0 0 0;
            padding: 0;
            justify-content: center;

            .tag__item {
                display: inline-block;
                background: rgba(242, 229, 191, 0.4);
                border-radius: 3px;
                padding: 2.5px 10px;
                margin: 0 5px 5px 0;
                cursor: default;
                user-select: none;
                transition: background-color 0.3s;

                &:hover {
                    background: rgba(242, 229, 191, 0.8);
                }
            }
        }

        &:before {
            content: "";
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            opacity: 1;
            border-radius: 10px;
        }

        &:hover .postcard__bar {
            width: 100px;
        }
    }

    @media screen and (min-width: 769px) {
        .postcard {
            flex-wrap: inherit;

            .postcard__title {
                font-size: 2rem;
            }

            .postcard__tagbox {
                justify-content: start;
            }

            .postcard__img {
                max-width: 300px;
                max-height: 100%;
                transition: transform 0.3s ease;
            }

            .postcard__text {
                padding: 3.5rem;
                width: 100%;
            }

            .media.postcard__text:before {
                content: "";
                position: absolute;
                display: block;
                background: #18151f;
                top: -20%;
                height: 130%;
                width: 55px;
            }

            &:hover .postcard__img {
                transform: scale(1.1);
            }

            &:nth-child(2n + 1) {
                flex-direction: row;
            }

            &:nth-child(2n + 0) {
                flex-direction: row-reverse;
            }

            &:nth-child(2n + 1) .postcard__text::before {
                left: -12px !important;
                transform: rotate(4deg);
            }

            &:nth-child(2n + 0) .postcard__text::before {
                right: -12px !important;
                transform: rotate(-4deg);
            }
        }
    }

    @media screen and (min-width: 1024px) {
        .postcard__text {
            padding: 2rem 3.5rem;
        }

        .postcard__text:before {
            content: "";
            position: absolute;
            display: block;

            top: -20%;
            height: 130%;
            width: 55px;
        }

        .postcard.light {
            .postcard__text:before {
                background: #56503a;
            }
        }
    }
    </style>
</head>

<body style="
  font-family: 'Plus Jakarta Sans', sans-serif; 
  background-color: #F2E5BF;
  overflow-x:hidden;">
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
                    <a class="nav-link " href="index.php" style="color:black">Beranda</a>
                </li>
                <li class="nav-item" style="align-content: center;">
                    <a class="nav-link active" href="berita.php" style="color: #CB6040;">Berita</a>
                </li>
                <li class="nav-item" style="align-content: center;">
                    <a class="nav-link" href="tentang.php" style="color: black;">Tentang</a>
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
    <section>
        <h1 class="featurette-heading text-center"
            style="font-weight: 600;margin: 1rem 0rem;background-color: #56503a;color: #F2E5BF;">DAFTAR ORANG HILANG
        </h1>
        <p class="lead" style="margin: 0rem 2rem;text-align:center;">
            <?php
                        include ("dashboard/connect.php");
                        $sql7 = "SELECT banyak FROM statistik WHERE label='Hilang'";
                        $q4 = mysqli_query($koneksi, $sql7);
                        while ($data = mysqli_fetch_array($q4)) {
                        ?>
            Terdapat <span style="font-weight:600"><?=$data['banyak'];?> </span>orang yang hilang karena tanah longsor
            dan belum ditemukan hingga saat ini.
            <?php } ?>
        </p>
        <div class="row">
            <div class="col-1"></div>
            <div class="col-10 d-flex flex-wrap">
                <?php
                        include ("dashboard/connect.php");
                        $sql1 = "SELECT id, nama, usia, img, sejak, status FROM oranghilang WHERE status='Masih Dalam Pencarian'";
                        $q2 = mysqli_query($koneksi, $sql1);
                        $urut = 1;
                        while ($data = mysqli_fetch_array($q2)) {
                            $idoranghilang = $data['id'];
                        ?>
                <div>
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="assets/image/hilang/<?= $data['img'] ?>"
                            alt="<?= $data['nama'] ?>" style="border-radius: 1.5rem;">
                        <div style="margin:1rem 0rem;">
                            <h5 class="card-title" id="myText" style="font-weight:700;"><?= $data['nama'] ?></h5>
                            <div class="text-right">
                                <a href="#" data-toggle="modal" data-target="#<?= $data['id'] ?>" target="blank_"
                                    style="color:#18151f; font-weight:200;">Lihat
                                    Selengkapnya</a><i class="fa fa-arrow-right ml-2"></i>
                            </div>

                        </div>
                    </div>
                    <div class="modal fade bd-example-modal-lg" id="<?= $data['id'] ?>" tabindex="-1" role="dialog"
                        aria-labelledby="<?= $data['id'] ?>Title" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Data Orang Hilang</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-3 d-none d-md-block">
                                            <img src="assets/image/hilang/<?= $data['img'] ?>" height="250px"
                                                class="img-fluid" style="align-content: center;">
                                        </div>
                                        <div class="col-12 d-block d-md-none"
                                            style="text-align: center; margin-bottom: 1rem;">
                                            <img src="assets/image/hilang/<?= $data['img'] ?>" height="250px"
                                                class="img-fluid">
                                        </div>
                                        <div class="col-md-9">
                                            <table class="table table-hover mb-0">
                                                <tr>
                                                    <td>Nama</td>
                                                    <td><?= $data['nama'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Usia</td>
                                                    <td><?= $data['usia'] ?> Tahun</td>
                                                </tr>
                                                <tr>
                                                    <td>Ciri-Ciri Fisik</td>
                                                    <td>
                                                        <?php  
                    include("dashboard/connect.php");  
                    $sql2 = "SELECT ciri_oranghilang.ciri FROM ciri_oranghilang WHERE id_orang=$idoranghilang;";  
                    $q3 = mysqli_query($koneksi, $sql2);  
                    while ($datas = mysqli_fetch_array($q3)) {  
                    ?>
                                                        <li><?= $datas['ciri'] ?></li>
                                                        <?php } ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Hilang Sejak</td>
                                                    <td><?= $data['sejak'] ?></td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>

                                </div>
                                <div class="modal-footer text-left text-justify">
                                    Apabila memiliki informasi terkait dengan orang ini, hubungi Call Center 112
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </section>
    <section class="light">
        <h1 class="featurette-heading text-center"
            style="font-weight: 600;margin: 1rem 0rem;background-color: #56503a;color: #F2E5BF;">BERITA TERKINI</h1>
        <div class="container py-2">
            <?php
                $url = 'https://newsapi.org/v2/everything?q=bencana%20longsor&apiKey=e48fd4099d054a5f9de1c1818f62b1ad';  
                $ch = curl_init();  
                curl_setopt($ch, CURLOPT_URL, $url);  
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);  
                curl_setopt($ch, CURLOPT_HTTPHEADER, array(  
                    'User-Agent: localhost (http://localhost/simb/berita.php)'
                ));  
                $response = curl_exec($ch);  
                $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);  
                curl_close($ch);                  
                $NewsData = json_decode($response, true);
                foreach ($NewsData['articles'] as $News) { 
                    $publishedAt = $News['publishedAt']; 
                    $date = new DateTime($publishedAt);  
                    $formattedDate = $date->format('j F Y');  
            ?>
            <article class="postcard light blue">
                <a class="postcard__img_link" href="<?=$News['url'] ?>" target="blank_">
                    <img class="postcard__img" src="<?=$News['urlToImage'] ?>" alt="<?=$News['title'] ?>" />
                </a>
                <div class="postcard__text t-dark">
                    <h1 class="postcard__title blue"><a href="<?=$News['url'] ?>"
                            target="blank_"><?=$News['title'] ?></a></h1>
                    <div class="postcard__subtitle small">
                        <i class="fa fa-calendar mr-2"></i><?=$formattedDate ?>
                    </div>
                    <div class="postcard__bar"></div>
                    <div class="postcard__preview-txt"><?=$News['description'] ?></div>
                    <ul class="postcard__tagbox">
                        <li class="tag__item"><a href="<?=$News['url'] ?>" target="blank_">Lihat
                                Selengkapnya</a><i class="fa fa-arrow-right ml-2"></i></li>
                    </ul>
                </div>
            </article>
            <?php } ?>
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
    <script src="assets/js/landing.js"></script>
    <script src="assets/js/berita.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>