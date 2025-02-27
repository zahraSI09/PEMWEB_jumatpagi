<?php

$list_buah = ["mangga", "pepaya", "pisang", "jambu"];


echo $list_buah[2];
echo "<br>List berisi " . count($list_buah) . " buah";

//mencetak seluruh nilai di dalam array
echo "<ol>";
foreach($list_buah as $buah) {
    echo "<li>$buah</li>";
}
echo "</ol>";

//membuat nilai array
$list_buah[] = "Durian";
echo "<ol>";
foreach($list_buah as $buah) {
    echo "<li>$buah</li>";
}
echo "</ol>";

//menghapus nilai array berdasarkan index
unset($list_buah[1]);
echo "<ol>";
foreach($list_buah as $buah) {
    echo "<li>$buah</li>";
}
echo "</ol>";

//mengubah nilai array berdasarkan index
$list_buah[0] = "manggis";
echo "<ol>";
foreach($list_buah as $buah) {
    echo "<li>$buah</li>";
}
echo "</ol>";

//mencetak seluruh nilai array beserta indexnya
echo "<ol>";
foreach ($list_buah as $index => $buah) {
    echo "<li>buah dengan index $index adalah $buah</li>";
}
echo "</ul>";
?>