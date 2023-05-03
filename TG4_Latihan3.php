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
		$angka_pertama = 200;
		$angka_kedua = 15;
        $angka_ketiga = 10;
		$jumlah = ($angka_pertama * $angka_kedua) / $angka_ketiga;
		$teks = 'Hasil dari (200 X 15) / 10 adalah : ';
		
		echo ($teks . $jumlah);
	?>
</body>
</html>