<?php
function salam($nama = "Nurul Fikri"){
    echo " Asaalamualaikum Apa Kabar Teman" . $nama;
}
?>
<h1>Selamat Datang di STT-NF</h1>
<P>
<?php
    salam("Yucaa Riansyah");
    echo "<br>";
    salam();
?>
