<?php

include("config.php");

if (isset($_GET['no_produk'])) {

    // ambil id dari query string
    $id = $_GET['no_produk'];

    // buat query hapus
    $sql = "DELETE FROM produk WHERE no_produk=$id";
    $query = mysqli_query($db, $sql);

    // apakah query hapus berhasil?
    if ($query) {
        header('Location: index.php');
    } else {
        die("gagal menghapus...");
    }
} else {
    die("akses dilarang...");
}
