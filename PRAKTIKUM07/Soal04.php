<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>

<?php 
function is_prime($number) {
	if ($number == 1) { // jika 1  bukan bilangan prima
		return false;
	}
	if ($number == 2) { // jika 2 satu satunya bil. genap berupa bilangan prima
		return true;
	}
	// algoritma akar kuadrat mempercepat pengujian bil. prima yang lebih besar
	$x = sqrt($number);
	$x = floor($x);

	for ($i = 2; $i <= $x; ++$i) {
		if ($number % $i == 0) {
			break;
		}
	}

	if ($x == $i - 1) {
		return true;
	} else{
		return false;
	}
}

function cekPrima($n,$m) {
	$jumlah = 0;

	for ($i = $n; $i <= $m; $i++) {
		if (is_prime($i)) {
			echo $i.', ';
			$jumlah++;
		}
	}
	echo "<br>jumlah bilangan prima ".$jumlah."<br>";
}

cekPrima(0,100);

 ?>

</body>
</html>