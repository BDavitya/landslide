<?php
include("connect.php");

if (isset($_POST['add'])) {
    $name = $_POST['name'];
    $date = $_POST['date'];
    $isi = $_POST['isi'];
    $sql = "INSERT INTO berita (name, date, artikel) VALUES ('$name', '$date', '$isi')";
    $q1 = mysqli_query($koneksi, $sql);
    if ($q1) {
        header("Location: news.php?successAdd=true");
    } else {
        echo "Failed to add data" . mysqli_error($koneksi);
    }
}


?>