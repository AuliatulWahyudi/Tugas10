<?php include("config.php"); ?>


<!DOCTYPE html>
<html>

<head>
    <title>Arkademy</title>
</head>

<body>
    <nav>
        <a href="tambah.php">[+] Tambah Baru</a>
    </nav>

    <br>

    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Produk</th>
                <th>Keterangan</th>
                <th>Harga</th>
                <th>Jumlah</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>

            <?php
            $sql = "SELECT * FROM produk";
            $query = mysqli_query($db, $sql);

            while ($siswa = mysqli_fetch_array($query)) {
                echo "<tr>";

                echo "<td>" . $siswa['no_produk'] . "</td>";
                echo "<td>" . $siswa['nama_produk'] . "</td>";
                echo "<td>" . $siswa['keterangan'] . "</td>";
                echo "<td>" . $siswa['harga'] . "</td>";
                echo "<td>" . $siswa['jumlah'] . "</td>";

                echo "<td>";
                echo "<a href='edit.php?no_produk=" . $siswa['no_produk'] . "'>Edit</a> | ";
                echo "<a href='hapus.php?no_produk=" . $siswa['no_produk'] . "'>Hapus</a>";
                echo "</td>";

                echo "</tr>";
            }
            ?>

        </tbody>
    </table>

    <p>Total: <?php echo mysqli_num_rows($query) ?></p>

</body>

</html>