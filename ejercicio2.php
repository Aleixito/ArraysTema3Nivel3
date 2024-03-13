
<?php

$array = array("manzana", "banana", "tomate", "aguacate", "uva", "melocoton");

function filtroCadenaLongitudPar($string) {
    return strlen($string) % 2 == 0;
}

$arrayFiltrado = array_filter($array, "filtroCadenaLongitudPar");

print_r($arrayFiltrado);

?>