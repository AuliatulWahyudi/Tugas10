<?php

include("config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if (isset($_POST['simpan'])) {

    // ambil data dari formulir
    $nama = $_POST['nama'];
    $ket = $_POST['keterangan'];
    $har = $_POST['harga'];
    $jum = $_POST['jumlah'];

    // buat query
    $sql = "INSERT INTO produk (nama_produk, keterangan, harga, jumlah) VALUE ('$nama', '$ket', '$har', '$jum')";
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil?
    if ($query) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: index.php');
    } else {
        // kalau gagal alihkan ke halaman indek.ph dengan status=gagal
        header('Location: index.php');
    }
} else {
    die("Akses dilarang...");
}
