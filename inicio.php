<?php
$valor = readline("ingrese los numeros: ");
$num = (int)$valor;
$partes = explode(" ", $num);
$n = (int)$partes[0];
$k = (int)$partes[1];
if ($n >= 1 && $n <= 10^7 && $k >= 1 && $k <= 10^9) {
    $count = 0;
    $res= 0;
    while (($count <= $n) ) {
        $count++;
        $res = $res + $count;
    }
    if ($res % $k == 0) {
        echo "SI";
    } else {   
        echo "NO";
    }
} else {
    echo "no entran en el parametro";
}
?> 