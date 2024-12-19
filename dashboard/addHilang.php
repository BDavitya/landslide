<?php
include("connect.php");

if (isset($_POST['add'])) {
    $name = $_POST['name'];
    $usia = $_POST['usia'];
    $ciri = $_POST['ciri'];
    $sejak = $_POST['date'];
    $sql = "INSERT INTO oranghilang (`nama`, `usia`, `ciri`, `sejak`) VALUES ('$name', '$usia', '$ciri', '$sejak')";
    $q1 = mysqli_query($koneksi, $sql);
    if ($q1) {
        header("Location: oranghilang.php?successAdd=true");
    } else {
        echo "Failed to add data" . mysqli_error($koneksi);
    }
}


?>

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
    <title>Dashboard - Dasboard Tanah Longsor</title>
    <link rel="icon" href="../asset/image/favicon.png" type="image/svg+xml" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

    <link rel="icon" href="../assets/image/icon.png" type="image/svg+xml" />
    <link rel="stylesheet" href="../asset/css/dashboard.css" />
</head>

<body class="d-flex">
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
                </a>
            </li>
            <li class="my-4 rounded nav-item">
                <a href="news.php" style="text-decoration: none;"
                    class="tooltipp d-flex flex-column align-items-center text-secondary">
                    <i class="fa fa-newspaper-o" style="font-size: 40px;"></i>
                </a>
            </li>
            <li class="my-4 rounded nav-item">
                <a href="oranghilang.php" style="text-decoration: none;"
                    class="tooltipp d-flex flex-column align-items-center text-secondary">
                    <i class="fa fa-users" style="font-size: 40px;"></i>
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
        <div class="modal fade" id="logOut" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content modal-high-zindex">
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
    </div>
    <div class="container" style="margin-left:150px">
        <div class="my-5">

            <h1><b>TAMBAH ORANG HILANG</b></h1>
            <p class="text-body-secondary">Fitur ini menambahkan kasus orang hilang sehingga dapat tampil di sistem
                informasi Tanah Longsor.</p>

            <div class="container px-4 py-2" style="background-color: white; border-radius: 10px;">
                <form method="POST" action="addHilang.php">
                    <div class="modal-body">
                        <div class="mb-3">
                            <div class="row g-2">
                                <div class="col-md form-floating mb-3">
                                    <input required type="text" class="form-control" id="Name" name="name"
                                        placeholder="Type Class Name">
                                    <label for="Name">Nama</label>
                                </div>
                                <div class="col-md form-floating mb-3">
                                    <input required type="date" class="form-control" id="Date" name="date"
                                        placeholder="Type Class Date">
                                    <label for="Date">Hilang Sejak</label>
                                </div>
                            </div>
                            <div class="row g-2">
                                <div class="col-md form-floating mb-3">
                                    <input required type="text" class="form-control" id="Name" name="usia"
                                        placeholder="Type Class Name">
                                    <label for="Name">Usia</label>
                                </div>
                                <div class="col-md form-floating mb-3">
                                    <input required type="text" class="form-control" id="Name" name="ciri"
                                        placeholder="Type Class Name">
                                    <label for="Name">Ciri-Ciri</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" name="add">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
    const myModal = document.getElementById("myModal");
    const myInput = document.getElementById("myInput");

    $("#myModal").on("shown.bs.modal", function() {
        $("#myInput").trigger("focus");
    });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>
</body>

</html>