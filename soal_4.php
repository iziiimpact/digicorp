<?php

function nilaiTerbesarKedua($arr) {
    arsort($arr);
    $nilaiTerbesarKedua = array_values($arr)[1];
    return $nilaiTerbesarKedua;
}

$angkaRandom = [2, 5, 28, 19, 13];
$result = nilaiTerbesarKedua($angkaRandom);

echo "Array: " . implode(', ', $angkaRandom) . PHP_EOL;
echo "<br>Nilai terbesar kedua: " . $result . PHP_EOL;

?>