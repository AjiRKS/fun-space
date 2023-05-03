<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Pengurangan</title>
</head>
<body>
	<?php
		$angka_pertama = 15;
		$angka_kedua = 45;
        $angka_ketiga = 100;
		$jumlah = ($angka_pertama + $angka_kedua) - $angka_ketiga;
		$teks = 'Hasil dari (15 + 45) - 100 adalah : ';
		
		echo ($teks . $jumlah);
	?>
</body>
</html>