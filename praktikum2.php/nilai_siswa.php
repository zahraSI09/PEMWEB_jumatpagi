
<?php
 if(isset($_POST['submit'])){
    $nama = $_POST['nama'];
    $matkul = $_POST['matkul'];
    $nilai_uts = $_POST['nilai_uts'];
    $nilai_uas = $_POST['nilai_uas'];
    $nilai_tugas = $_POST['nilai_tugas'];

    echo "<p>Nama : $nama</p>";
    echo "<p>Mata Kuliah : $matkul</p>";
    echo "<p> Nilai UTS : $nilai_uts</p>";
    echo "<p> Nilai UAS : $nilai_uas</p>";
    echo "<p> Nilai Tugas/Praktikum : $nilai_tugas</p>";
    }


//  Status Kelulusan
$nilai_total = ($nilai_uts * 0.3) + ($nilai_uas * 0.35 + ($nilai_tugas * 0.35));

// chek nilai total 
if ($nilai_total > 55) {
    echo "<p>status : Lulus</p>";
}
else {
    echo "<p?>status : Tidak Lulus</p>";
}
?>