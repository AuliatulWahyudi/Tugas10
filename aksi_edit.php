<?php

include("config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if (isset($_POST['simpan'])) {

    // ambil data dari formulir
    $id = $_POST['no'];
    $nama = $_POST['nama'];
    $ket = $_POST['keterangan'];
    $har = $_POST['harga'];
    $jum = $_POST['jumlah'];

    // buat query update
    $sql = "UPDATE produk SET nama_produk='$nama', keterangan='$ket', harga='$har', jumlah='$jum' WHERE no_produk=$id";
    $query = mysqli_query($db, $sql);

    // apakah query update berhasil?
    if ($query) {
        // kalau berhasil alihkan ke halaman list-siswa.php
        header('Location: index.php');
    } else {
        // kalau gagal tampilkan pesan
        die("Gagal menyimpan perubahan...");
    }
} else {
    die("Akses dilarang...");
}
