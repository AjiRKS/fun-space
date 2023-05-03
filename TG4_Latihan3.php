<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Perkalian dan Pembagian</title>
</head>
<body>
	<?php
		// Inisialisasi Variabel
		$angka_pertama = 200;
		$angka_kedua = 15;
        $angka_ketiga = 10;
		$teks = 'Hasil dari (200 X 15) / 10 adalah : ';

		// Operasi
		$jumlah = ($angka_pertama * $angka_kedua) / $angka_ketiga;
		
		//Menampilkan hasil
		echo ($teks . $jumlah);
	?>
</body>
</html>