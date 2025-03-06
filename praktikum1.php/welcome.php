<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<h3>Selamat Belajar Web</h3>

<?php
    $_nama = "Zahra Nauroh";
    $_umur = 19;
    $_berat = 50;
    $_prodi = "sistem informasi";
    $_kampus = "STT Terpadu Nurul Fikri";
    echo "Nama saya $_nama, umur saya $_umur tahun";
    echo "<br>";
 ?>
 <hr/>
 <?php
    echo "berat badan saya $_berat kg";
    echo "<br>";
    echo "saya kuliah di prodi $_prodi";
?>
<br>saya kuliah dikampus <strong><?= $_kampus ?></strong>
</body>
</html>