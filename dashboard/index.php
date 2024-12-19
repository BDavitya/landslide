<?php session_start();

if(!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
} 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard - Dasboard LandSlide</title>
    <link rel="icon" href="../assets/image/icon.png" type="image/svg+xml" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="../assets/css/dashboard.css" />
    <style>
    .modal-backdrop {
        z-index: 1040 !important;
    }

    .modal {
        z-index: 1070 !important;
    }

    .sidebar {
        z-index: 1030;
    }
    </style>
</head>

<body class="d-flex position-relative">
    <div class="d-flex flex-column flex-shrink-0 bg-body-tertiary px-2" style="height: 100vh; position: fixed;">
        <div class="m-2 mt-4">
            <img src="../assets/image/icon.png" style="height: 70px;" />
        </div>
        <hr />
        <ul class="nav nav-pills nav-flush flex-column mb-auto text-center mt-4 text-gray-700 list-unstyled w-100"
            style="margin-left: 0px;">
            <li class="mb-4 rounded nav-item">
                <a href="index.php" style="text-decoration: none;"
                    class="tooltipp here d-flex flex-column align-items-center text-secondary">
                    <i class="fa fa-tachometer" style="font-size: 40px;"></i>
                    <span class="tooltipptext tooltipp-right"
                        style="margin-top: 10px; margin-left: -30px;">Dashboard</span>
                </a>
            </li>
            <li class="my-4 rounded nav-item">
                <a href="statistic.php" style="text-decoration: none;"
                    class="tooltipp d-flex flex-column align-items-center text-secondary">
                    <i class="fa fa-bar-chart" style="font-size: 40px;"></i>
                    <span class="tooltipptext tooltipp-right"
                        style="margin-top: 10px; margin-left: -30px;">Statistic</span>
                </a>
            </li>
            <li class="my-4 rounded nav-item">
                <a href="information.php" style="text-decoration: none;"
                    class="tooltipp d-flex flex-column align-items-center text-secondary">
                    <i class="fa fa-info" style="font-size: 40px;"></i>
                    <span class="tooltipptext tooltipp-right" style="margin-top: 10px; margin-left: -30px;">
                        Information</span>
                </a>
            </li>
            <li class="my-4 rounded nav-item">
                <a href="people.php" style="text-decoration: none;"
                    class="tooltipp d-flex flex-column align-items-center text-secondary">
                    <i class="fa fa-users" style="font-size: 40px;"></i>
                    <span class="tooltipptext tooltipp-right" style="margin-top: 10px; margin-left: -30px;">Lost
                        People</span>
                </a>
            </li>
            <li class="my-4 rounded nav-item">
                <a href="account.php" style="text-decoration: none;"
                    class="tooltipp d-flex flex-column align-items-center text-secondary">
                    <i class="fa fa-user" style="font-size: 40px;"></i>
                    <span class="tooltipptext tooltipp-right"
                        style="margin-top: 10px; margin-left: -30px;">Account</span>
                </a>
            </li>
        </ul>
        <div class="border-top">
            <a href="#"
                class="d-flex align-items-center justify-content-center p-3 link-body-emphasis text-decoration-none"
                aria-expanded="false">
                <i class="fa fa-sign-out" data-bs-toggle="modal" data-bs-target="#logOut" aria-hidden="true"
                    style="font-size: 50px;"></i>
            </a>
        </div>
    </div>
    <div class="container" style="margin-left: 150px;">
        <div class="my-5">
            <?php
        if (isset($_GET['successLogin']) && $_GET['successLogin'] === 'true') { ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                You have successfully logged in!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php 
        } 
        ?>
            <h1><b>Dashboard LandSlide</b></h1>
            <p class="text-body-secondary mb-5">
                This feature is used to display the number of people who ever lost
                because of landslide and statistic landslide phenomena in Indonesia.
            </p>
            <div class="d-flex flex-wrap gap-4 m-0">
                <div class="d-flex align-items-center py-4 px-5 bg-white shadow rounded col">
                    <div>
                        <h2 class="d-block text-center">Demage</h2>
                        <div>
                            <canvas id="DemageChart"></canvas>
                        </div>
                        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                        <script>
                        const ctx = document.getElementById("DemageChart");

                        new Chart(ctx, {
                            type: "pie",
                            data: {
                                labels: [
                                    "House",
                                    "Educational Facilities",
                                    "Health Facilities",
                                    "Worship Facilities",
                                    "Public facilities",
                                    "Office",
                                    "Bridge",
                                    "Factory",
                                    "Stall",
                                ],
                                datasets: [{
                                    label: "Number of Demage",
                                    data: [
                                        <?php 
                                        include ("connect.php");
                                      $rumah = mysqli_query($koneksi,"select banyak from statistik where label='rumah'");
                                      $datarumah = mysqli_fetch_array($rumah);
                                      echo $datarumah['banyak'];
                                      ?>,
                                        <?php 
                                        include ("connect.php");
                                      $fasilitasPendidikan = mysqli_query($koneksi,"select banyak from statistik where label='Fasilitas Pendidikan'");
                                      $datafasilitasPendidikan = mysqli_fetch_array($fasilitasPendidikan);
                                      echo $datafasilitasPendidikan['banyak'];
                                      ?>,
                                        <?php 
                                        include ("connect.php");
                                      $fasilitasKesehatan = mysqli_query($koneksi,"select banyak from statistik where label='Fasilitas Kesehatan'");
                                      $datafasilitasKesehatan = mysqli_fetch_array($fasilitasKesehatan);
                                      echo $datafasilitasKesehatan['banyak'];
                                      ?>,
                                        <?php 
                                        include ("connect.php");
                                      $fasilitasPeribadahan = mysqli_query($koneksi,"select banyak from statistik where label='Fasilitas Peribadahan'");
                                      $datafasilitasPeribadahan = mysqli_fetch_array($fasilitasPeribadahan);
                                      echo $datafasilitasPeribadahan['banyak'];
                                      ?>,
                                        <?php 
                                        include ("connect.php");
                                      $fasilitasUmum = mysqli_query($koneksi,"select banyak from statistik where label='Fasilitas Umum'");
                                      $datafasilitasUmum = mysqli_fetch_array($fasilitasUmum);
                                      echo $datafasilitasUmum['banyak'];
                                      ?>,
                                        <?php 
                                        include ("connect.php");
                                      $Perkantoran = mysqli_query($koneksi,"select banyak from statistik where label='Perkantoran'");
                                      $dataPerkantoran = mysqli_fetch_array($Perkantoran);
                                      echo $dataPerkantoran['banyak'];
                                      ?>,
                                        <?php 
                                        include ("connect.php");
                                      $Jembatan = mysqli_query($koneksi,"select banyak from statistik where label='Jembatan'");
                                      $dataJembatan = mysqli_fetch_array($Jembatan);
                                      echo $dataJembatan['banyak'];
                                      ?>,
                                        <?php 
                                        include ("connect.php");
                                      $Pabrik = mysqli_query($koneksi,"select banyak from statistik where label='Pabrik'");
                                      $dataPabrik = mysqli_fetch_array($Pabrik);
                                      echo $dataPabrik['banyak'];
                                      ?>,
                                        <?php 
                                        include ("connect.php");
                                      $Kios = mysqli_query($koneksi,"select banyak from statistik where label='Kios'");
                                      $dataKios = mysqli_fetch_array($Kios);
                                      echo $dataKios['banyak'];
                                      ?>
                                    ],
                                    borderWidth: 1,
                                }, ],
                            },
                            options: {
                                scales: {
                                    y: {
                                        beginAtZero: true,
                                    },
                                },
                            },
                        });
                        </script>
                    </div>
                </div>
                <div class="d-flex align-items-center py-4 px-5 bg-white shadow rounded col">
                    <div>
                        <h2 class="d-block text-center">Victims</h2>
                        <div>
                            <canvas id="VictimsChart"></canvas>
                        </div>
                        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                        <script>
                        const ctl = document.getElementById("VictimsChart");

                        new Chart(ctl, {
                            type: "pie",
                            data: {
                                labels: [
                                    "Die",
                                    "Gone",
                                    "Wounded",
                                    "Suffer",
                                    "Flee",
                                ],
                                datasets: [{
                                    label: "Number of Victims",
                                    data: [
                                        <?php 
                                        include ("connect.php");
                                      $meninggal = mysqli_query($koneksi,"select banyak from statistik where label='Meninggal'");
                                      $datameninggal = mysqli_fetch_array($meninggal);
                                      echo $datameninggal['banyak'];
                                      ?>,
                                        <?php 
                                        include ("connect.php");
                                      $hilang = mysqli_query($koneksi,"select banyak from statistik where label='hilang'");
                                      $datahilang = mysqli_fetch_array($hilang);
                                      echo $datahilang['banyak'];
                                      ?>,
                                        <?php 
                                        include ("connect.php");
                                      $terluka = mysqli_query($koneksi,"select banyak from statistik where label='terluka'");
                                      $dataterluka = mysqli_fetch_array($terluka);
                                      echo $dataterluka['banyak'];
                                      ?>,
                                        <?php 
                                        include ("connect.php");
                                      $menderita = mysqli_query($koneksi,"select banyak from statistik where label='menderita'");
                                      $datamenderita = mysqli_fetch_array($menderita);
                                      echo $datamenderita['banyak'];
                                      ?>,
                                        <?php 
                                        include ("connect.php");
                                      $mengungsi = mysqli_query($koneksi,"select banyak from statistik where label='mengungsi'");
                                      $datamengungsi = mysqli_fetch_array($mengungsi);
                                      echo $datamengungsi['banyak'];
                                      ?>
                                    ],
                                    borderWidth: 1,
                                }, ],
                            },
                            options: {
                                scales: {
                                    y: {
                                        beginAtZero: true,
                                    },
                                },
                            },
                        });
                        </script>
                    </div>
                </div>
                <div class="d-flex align-items-center py-4 px-5 bg-white shadow rounded col">
                    <div class="d-inline-flex align-items-center justify-content-center h-4 w-4"
                        style="margin-right: 1.5rem;">
                        <i class="fa fa-search fs-2"></i>
                    </div>
                    <div>
                        <?php
                        include ("connect.php");
                        $sql = "SELECT COUNT(*) AS totalData FROM oranghilang where status='Masih Dalam Pencarian'";
                        $q1 = mysqli_query($koneksi, $sql);
                        $data = mysqli_fetch_array($q1); 
                        $totalData = $data['totalData']?>
                        <span class="d-block fs-2 fw-bold"><?=$totalData?></span>
                        <span class="d-block text-muted">People Who Lost but Identified</span>
                    </div>
                </div>
                <div class="d-flex align-items-center py-4 px-5 bg-white shadow rounded col">
                    <div class="d-inline-flex align-items-center justify-content-center h-4 w-4"
                        style="margin-right: 1.5rem;">
                        <i class="fa fa-check-circle-o fs-2"></i>
                    </div>
                    <div>
                        <?php
                        include ("connect.php");
                        $sql = "SELECT COUNT(*) AS totalData FROM oranghilang where status='Sudah Ditemukan'";
                        $q1 = mysqli_query($koneksi, $sql);
                        $data = mysqli_fetch_array($q1); 
                        $totalData = $data['totalData']?>
                        <span class="d-block fs-2 fw-bold"><?=$totalData?></span>
                        <span class="d-block text-muted">People Who Ever Lost but Founded</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
    const myModal = new bootstrap.Modal(document.getElementById("logOut"));
    myModal.show();
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>
    <div class="modal fade" id="logOut" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Log Out</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form method="POST" action="logout.php">
                    <div class="modal-body">
                        <div>
                            Are you sure want to end your session?
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                            Close
                        </button>
                        <button type="submit" class="btn btn-primary">Yes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>