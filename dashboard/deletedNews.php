<?php
include("connect.php");

if (isset($_POST['delete'])) {
    $id = $_POST['id'];
    $sql = "delete from berita where id = $id";
    $q1 = mysqli_query($koneksi, $sql);

    if ($q1) {
        header("Location: news.php?successDelete=true");
    } else {
        echo "Failed to delete data" . mysqli_error($koneksi);
    }
}


?>