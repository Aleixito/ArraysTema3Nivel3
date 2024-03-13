
<?php

$numeros = [1, 2, 3, 4, 5];

$numerosCubo = array_map(function ($numero) {
    return $numero ** 3;
}, $numeros);

print_r($numerosCubo);
?>