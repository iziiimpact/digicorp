<?php
function karakterTerbanyak($kata) {
    $kemunculan = array_count_values(str_split($kata));
    $maksKemunculan = max($kemunculan);
    $karakterTerbanyak = array_search($maksKemunculan, $kemunculan);
    return "$karakterTerbanyak $maksKemunculan" . "x";
}

// Penggunaan
$kata1 = 'jakarta';
$kata2 = 'solo';

$result1 = karakterTerbanyak($kata1);
$result2 = karakterTerbanyak($kata2);

echo "Untuk kata '$kata1', karakter terbanyak: $result1" . PHP_EOL;
echo "<br>Untuk kata '$kata2', karakter terbanyak: $result2" . PHP_EOL;

?>