<?php

function lampuLaluLintas() {
    $warnaLampu = ['merah', 'kuning', 'hijau'];

    if (!isset($GLOBALS['lampuLaluLintas'])) {
        $GLOBALS['lampuLaluLintas'] = 0;
    }

    $currentColor = $warnaLampu[$GLOBALS['lampuLaluLintas']];

    $GLOBALS['lampuLaluLintas'] = ($GLOBALS['lampuLaluLintas'] + 1) % count($warnaLampu);

    return $currentColor;
}

echo lampuLaluLintas() . PHP_EOL; // merah
echo lampuLaluLintas() . PHP_EOL; // kuning
echo lampuLaluLintas() . PHP_EOL; // hijau
echo lampuLaluLintas() . PHP_EOL; // merah
echo lampuLaluLintas() . PHP_EOL; // kuning
echo lampuLaluLintas() . PHP_EOL; // hijau
echo lampuLaluLintas() . PHP_EOL; // merah
// dan seterusnya

?>