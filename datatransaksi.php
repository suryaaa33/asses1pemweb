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

if (isset($_POST['submit'])) {
    $kode_transaksi = $_POST["kodetransaksi"];
    $tanggal_transaksi = $_POST["tgltransaksi"];
    $customer = $_POST["customer"];
    $barang1 = $_POST["barang1"];
    $barang2 = $_POST["barang2"];
    $barang3 = $_POST["barang3"];
    $jumlahbeli1 = $_POST["jumlahbeli1"];
    $jumlahbeli2 = $_POST["jumlahbeli2"];
    $jumlahbeli3 = $_POST["jumlahbeli3"];
    $kartu_member = $_POST["kartumember"];
    $uang_pembayaran = $_POST["uangbayar"];

    echo "<h2> Data inputan sebagai berikut </h2>";
    echo "Kode Transaksi :  $kode_transaksi <br>";
    echo "Tanggal Transaksi : $tanggal_transaksi <br>";
    echo "Customer : $customer <br>";

    // Buat tabel untuk menampilkan data transaksi
    echo "<table border='1'>";
    echo "<tr><th>No</th><th>Nama Barang</th><th>Jumlah Beli</th><th>Harga Satuan</th><th>Total Harga</th></tr>";
    $subtotal = 0;

    foreach ($tokosembako as $barang) {
        if ($barang['Nama Barang'] == $barang1) {
            $total1 = $jumlahbeli1 * $barang['Harga'];
            echo "<tr><td>{$barang['No']}</td><td>$barang1</td><td>$jumlahbeli1</td><td>{$barang['Harga']}</td><td>$total1</td></tr>";
            $subtotal += $total1;
        }
        if ($barang['Nama Barang'] == $barang2) {
            $total2 = $jumlahbeli2 * $barang['Harga'];
            echo "<tr><td>{$barang['No']}</td><td>$barang2</td><td>$jumlahbeli2</td><td>{$barang['Harga']}</td><td>$total2</td></tr>";
            $subtotal += $total2;
        }
        if ($barang['Nama Barang'] == $barang3) {
            $total3 = $jumlahbeli3 * $barang['Harga'];
            echo "<tr><td>{$barang['No']}</td><td>$barang3</td><td>$jumlahbeli3</td><td>{$barang['Harga']}</td><td>$total3</td></tr>";
            $subtotal += $total3;
        }
    }

    echo "</table>";

    echo "Subtotal: $subtotal <br>";
    echo "Punya Kartu Member? : $kartu_member <br>";
    echo "Uang Pembayaran : $uang_pembayaran <br>";
}
?>
