
<?php

function esPrimero($numero) {
    if ($numero <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($numero); $i++) {
        if ($numero % $i == 0) {
            return false;
        }
    }
    return true;
}

$numeros = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

$sumaDePrimeros = array_reduce($numeros, function ($carry, $item) {
    return esPrimero($item) ? $carry + $item : $carry;
});

echo $sumaDePrimeros; 

?>