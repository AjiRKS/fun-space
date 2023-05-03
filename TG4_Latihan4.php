<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Keuntungan Penjualan</title>
</head>
<body>
	<?php
		// Inisialisasi Variabel
        $nama_barang = 'Kaos Olahraga';
        $harga_beli = 30000;
		$harga_jual = 40000;
        $jumlah_barang = 5;
        $pajak = 0.1;

        // Menghitung total pembelian, total penjualan dan laba kotor
        $total_pembelian = $harga_beli * $jumlah_barang;
        $total_penjualan = $harga_jual * $jumlah_barang;
        $laba_kotor = $total_penjualan - $total_pembelian;

        // Menghitung laba bersih
        $laba_bersih = $laba_kotor - ($laba_kotor * $pajak);

		// Menampilkan hasil
        echo "Nama barang : " .$nama_barang . "<br>";
        echo "Total pembelian : " .$total_pembelian . "<br>";
        echo "Total penjulan : " .$total_penjualan . "<br>";
        echo "Laba kotor : " .$laba_kotor . "<br>";
        echo "Laba bersih : " .$laba_bersih . "<br>";

	?>
</body>
</html>