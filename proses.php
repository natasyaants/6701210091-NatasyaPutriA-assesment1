<!DOCTYPE html>
<html>
<head>
	<title>Kalkulator Sederhana</title>
</head>
<body>
	<form method="post">
		<input type="number" name="angka_1" placeholder="Masukkan angka pertama"><br>
		<input type="number" name="angka_2" placeholder="Masukkan angka kedua"><br>
		<select name="operator">
			<option value="tambah">+</option>
			<option value="kurang">-</option>
			<option value="kali">*</option>
			<option value="bagi">/</option>
		</select><br>
		<input type="submit" name="submit" value="Hitung">
	</form>
	<?php
		if(isset($_POST['submit'])){
			$angka1 = $_POST['angka_1'];
			$angka2 = $_POST['angka_2'];
			$operator = $_POST['operator'];

			switch($operator){
				case "tambah":
					$hasil = $angka_1 + $angka_2;
					break;
				case "kurang":
					$hasil = $angka_1 - $angka_2;
					break;
				case "kali":
					$hasil = $angka_1 * $angka_2;
					break;
				case "bagi":
					$hasil = $angka_1 / $angka_2;
					break;
			}

			echo "<br>Hasil perhitungan: ".$hasil;
		}
	?>
</body>
</html>