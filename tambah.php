<!DOCTYPE html>
<html>

<head>
    <title>Arkademy</title>
</head>

<body>
    <header>
        <h3>Form Tambah</h3>
    </header>

    <form action="aksi_tambah.php" method="POST">

        <fieldset>

            <p>
                <label for="nama">Nama Produk: </label>
                <input type="text" name="nama" placeholder="nama produk" />
            </p>
            <p>
                <label for="keterangan">Keterangan: </label>
                <textarea name="keterangan"></textarea>
            </p>
            <p>
                <label for="harga">Harga: </label>
                <input type="text" name="harga" placeholder="harga" />
            </p>
            <p>
                <label for="jumlah">Jumlah: </label>
                <input type="text" name="jumlah" placeholder="jumlah" />
            </p>
            <p>
                <input type="submit" value="Simpan" name="simpan" />
            </p>
        </fieldset>

    </form>

</body>

</html>