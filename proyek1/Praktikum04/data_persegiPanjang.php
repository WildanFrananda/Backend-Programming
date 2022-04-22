<?php
require_once "class_persegiPanjang.php";
$persegi1 = new Persegipanjang(10, 12);
$persegi2 = new Persegipanjang(10, 11);

echo "Luas Persegi Panjang I: ".$persegi1 -> getLuas()." cm";
echo "<br/>Luas Persegi Panjang II: ".$persegi2 -> getLuas()." cm";

echo "<br/>Keliling Persegi Panjang I: ".$persegi1 -> getKeliling()." cm";
echo "<br/>Keliling Persegi Panjang II: ".$persegi2 -> getKeliling()." cm";
?>