<?php

$nama_depan = "ZAHRA";
$nama_belakang = 'NAUROH';
$umur = 19;
$tb = 140;

echo $nama_depan . " ". $nama_belakang;
echo "<br> NAMA SAYA ADALAH $nama_depan DAN UMUR SAYA $umur TAHUN";

echo "<br /><br />";

//variable system
echo 'Dokumen Root' . $_SERVER ["DOCUMENT_ROOT"];

echo "<br /><br />";

//variable conctants
define('PHI',3.14);

$r = 8;
$luas = PHI * $r * $r;

echo "Lingkaran dengan jari-jari {$r}cm memiliki luas {$luas}cm2";
?>