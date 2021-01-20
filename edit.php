<?php

include("config.php");

if (!isset($_GET['no_produk'])) {
    // kalau tidak ada id di query string
    header('Location: index.php');
}

//ambil id dari query string
$id = $_GET['no_produk'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM produk WHERE no_produk=$id";
$query = mysqli_query($db, $sql);
$siswa = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if (mysqli_num_rows($query) < 1) {
    die("data tidak ditemukan...");
}

?>


<!DOCTYPE html>
<html>

<head>
    <title>Arkademy</title>
</head>

<body>

    <form action="aksi_edit.php" method="POST">

        <fieldset>

            <input type="hidden" name="no" value="<?php echo $siswa['no_produk'] ?>" />

            <p>
                <label for="nama">Nama Produk: </label>
                <input type="text" name="nama" placeholder="nama produk" value="<?php echo $siswa['nama_produk'] ?>" />
            </p>
            <p>
                <label for="keterangan">Keterangan: </label>
                <textarea name="keterangan"><?php echo $siswa['keterangan'] ?></textarea>
            </p>
            <p>
                <label for="harga">Harga: </label>
                <input type="text" name="harga" placeholder="harga" value="<?php echo $siswa['harga'] ?>" />
            </p>
            <p>
                <label for="jumlah">Jumlah: </label>
                <input type="text" name="jumlah" placeholder="jumlah" value="<?php echo $siswa['jumlah'] ?>" />
            </p>
            <p>
                <input type="submit" value="Simpan" name="simpan" />
            </p>

        </fieldset>


    </form>

</body>

</html>