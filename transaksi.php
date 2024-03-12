<html>
<body>
<?php
$tokosembako = array(
    array("No" => 1, "Nama Barang" => "Mie Instan", "Harga" => 3000),
    array("No" => 2, "Nama Barang" => "Sabun Mandi", "Harga" => 3500),
    array("No" => 3, "Nama Barang" => "Shampoo", "Harga" => 1000),
    array("No" => 4, "Nama Barang" => "Sandal Jepit", "Harga" => 11000),
    array("No" => 5, "Nama Barang" => "Roti", "Harga" => 12000),
    array("No" => 6, "Nama Barang" => "Buku Tulis", "Harga" => 5500),
    array("No" => 7, "Nama Barang" => "Susu Kotak", "Harga" => 6000),
    array("No" => 8, "Nama Barang" => "Minyak Goreng", "Harga" => 13000),
    array("No" => 9, "Nama Barang" => "Ice Cream", "Harga" => 11000),
    array("No" => 10, "Nama Barang" => "Baterai", "Harga" => 16000),
);
?>
    <h2>Halo, silahkan input data</h2>
    <form action="datatransaksi.php" method="post">
        Kode Transaksi: <input type="text" name="kodetransaksi"><br>
        Tanggal Transaksi: <input type="date" name="tgltransaksi"><br>
        Customer: <select name="customer">
            <option selected="selected"> -- Pilih Customer --</option>
            <option value="Angga Yunanda">Angga Yunanda</option>
            <option value="Refal Hady">Refal Hady</option>
            <option value="Iqbaal Ramadhan">Iqbaal Ramadhan</option>
            <option value="Jefri Nichol">Jefri Nichol</option>
            <option value="Rey Mbayang">Rey Mbayang</option>
        </select><br>
        Barang 1: <select name="barang1">
            <option selected="selected"> -- Pilih Barang --</option>
            <?php foreach ($tokosembako as $barang) { ?>
                <option value="<?php echo $barang['Nama Barang']; ?>"><?php echo $barang['Nama Barang']; ?></option>
            <?php } ?>
        </select>
        <input type="text" name="jumlahbeli1" size="1"><br>
        Barang 2: <select name="barang2">
            <option selected="selected"> -- Pilih Barang --</option>
            <?php foreach ($tokosembako as $barang) { ?>
                <option value="<?php echo $barang['Nama Barang']; ?>"><?php echo $barang['Nama Barang']; ?></option>
            <?php } ?>
        </select>
        <input type="text" name="jumlahbeli2" size="1"><br>
        Barang 3: <select name="barang3">
            <option selected="selected"> -- Pilih Barang --</option>
            <?php foreach ($tokosembako as $barang) { ?>
                <option value="<?php echo $barang['Nama Barang']; ?>"><?php echo $barang['Nama Barang']; ?></option>
            <?php } ?>
        </select>
        <input type="text" name="jumlahbeli3" size="1"><br>
        Punya Kartu Member? <input type="radio" name="kartumember" value="Ya">Ya
        <input type="radio" name="kartumember" value="Tidak">Tidak
        <br>
        Uang Pembayaran: <input type="text" name="uangbayar"><br>
        <input type="submit" align="right" name="submit" value="Simpan">
        <input type="reset" align="right" name="reset" value="Batal">
    </form>
</body>
</html>
