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
        /* Pastikan lebih tinggi dari backdrop */
    }

    .sidebar {
        z-index: 1030;
        /* Lebih rendah dari backdrop */
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
                    class="tooltipp  d-flex flex-column align-items-center text-secondary">
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
                    class="tooltipp here d-flex flex-column align-items-center text-secondary">
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
            <h1><b>Lost People</b></h1>
            <p class="text-body-secondary mb-5">
                This feature is used to display the datas of people who ever lost
                because of landslide that identified.
            </p>
            <a href="/" type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#addPerson">Add New
                Person</a>
            <div class="modal fade" id="addPerson" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered ">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="addPersonLabel">Add New Person</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form method="POST" action="addPerson.php">
                            <div class="modal-body">
                                <div class="mb-3">
                                    <div class="row g-2">
                                        <div class="col-md form-floating mb-3">
                                            <input required type="text" class="form-control" id="Name" name="name"
                                                placeholder="Type Full Name">
                                            <label for="Name">Full Name</label>
                                        </div>
                                        <div class="col-md form-floating mb-3">
                                            <input required type="text" class="form-control" id="age" name="age"
                                                placeholder="Type Age">
                                            <label for="age">Age</label>
                                        </div>
                                    </div>
                                    <div class="row g-2">
                                        <div class="col-md form-floating mb-3">
                                            <input required type="date" class="form-control" id="Date" name="date"
                                                placeholder="Date of Gone">
                                            <label for="Date">Gone Since</label>
                                        </div>
                                        <div class="col-md form-floating mb-3">
                                            <select class="form-select" id="status" name="status"
                                                aria-label="Floating label select example">
                                                <option disabled default>Status</option>
                                                <option value="Masih Dalam Pencarian">Masih Dalam Pencarian</option>
                                                <option value="Sudah Ditemukan">Sudah Ditemukan</option>
                                            </select>
                                            <label for="status">Status</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md form-floating mb-3">
                                            <input required type="file" class="form-control" id="image" name="image"
                                                placeholder="Upload Victim Image">
                                            <label for="image">Image</label>
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
            <?php
            if (isset($_GET['successAdd']) && $_GET['successAdd'] === 'true') { ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                New Person Successfully Added!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php }

            if (isset($_GET['successEdit']) && $_GET['successEdit'] === 'true') { ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                A Person Successfully Updated!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php
            }

            if (isset($_GET['successDelete']) && $_GET['successDelete'] === 'true') { ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                A Person Successfully Deleted!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php 
            } 
        ?>

            <div class="container px-4 py-2" style="background-color: white; border-radius: 10px;">
                <table class="table table-striped table-hover display data">
                    <thead>
                        <tr>
                            <th scope="col" style="text-align: center;">#</th>
                            <th scope="col" style="text-align: center;">Image</th>
                            <th scope="col" style="text-align: center;">Name</th>
                            <th scope="col" style="text-align: center;">Age</th>
                            <th scope="col" style="text-align: center;">Since</th>
                            <th scope="col" style="text-align: center;">Status</th>
                            <th scope="col" style="text-align: center;">Physical Characteristics</th>
                            <th scope="col" style="text-align: center;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include ("connect.php");
                        $sql1 = "select id, nama, usia, sejak, status, img from oranghilang order by id asc";
                        $q2 = mysqli_query($koneksi, $sql1);
                        $urut = 1;
                        while ($data = mysqli_fetch_array($q2)) {
                    ?>
                        <tr>
                            <th scope="row" style="vertical-align: middle; text-align: center;"><?= $urut++ ?></th>
                            <td style="vertical-align: middle; text-align-last:center;">
                                <img src="../assets/image/hilang/<?= $data['img']?>" alt="" style="width:150px;">
                            </td>
                            <td style="vertical-align: middle;"><?= $data['nama'] ?></td>
                            <td style="vertical-align: middle;"><?= $data['usia'] ?></td>
                            <td style="vertical-align: middle;"><?= $data['sejak'] ?></td>
                            <td style="vertical-align: middle;"><?= $data['status'] ?></td>
                            <td style="vertical-align: middle; text-align-last:center;">See the physical
                                characteristics-></td>
                            <td style="vertical-align: middle; text-align: center;">
                                <a href="editPerson.php?id=<?= $data['id'] ?>" type="button" class="btn btn-warning"
                                    data-bs-toggle="modal" data-bs-target="#editPerson<?= $data['id'] ?>">
                                    <i class="fa fa-pencil-square-o" style="font-size: 30px;"></i>
                                </a>
                                <a href="deletePerson.php?id=<?= $data['id'] ?>" type="button" class="btn btn-danger"
                                    data-bs-toggle="modal" data-bs-target="#deletePerson<?= $data['id'] ?>">
                                    <i class="fa fa-trash-o" style="font-size: 30px;"></i>
                                </a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/v/bs5/jq-3.7.0/dt-2.0.7/datatables.min.js"></script>
    <script>
    $(document).ready(function() {
        $('.data').DataTable();
    });
    const myModal = document.getElementById('myModal')
    const myInput = document.getElementById('myInput')

    myModal.addEventListener('shown.bs.modal', () => {
        myInput.focus()
    })
    </script>
</body>

</html>