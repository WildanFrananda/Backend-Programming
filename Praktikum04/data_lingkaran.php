<?php
require_once "class_lingkaran.php";
echo "NILAI PHI ".Lingkaran::PHI;
$lingkar1 = new Lingkaran(10);
$lingkar2 = new Lingkaran(4);

echo "<br/>Luas Lingkaran I: ".$lingkar1 -> getLuas()." cm";
echo "<br/>Luas Lingkaran II: ".$lingkar2 -> getLuas()." cm";

echo "<br/>Keliling Lingkaran I: ".$lingkar1 -> getKeliling()." cm";
echo "<br/>Keliling Lingkaran II: ".$lingkar2 -> getKeliling()." cm";
?>