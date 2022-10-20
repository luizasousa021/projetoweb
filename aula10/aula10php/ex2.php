<?php

// CRIE UM ARRAY COM 10 NÚMEROS E INFORME A MÉDIA DOS NÚMEROS
//DIGITADOS

$numero = array (100,90.8,7,6,5,4,3,2,1);
$soma = 0;
//$quantidade = 10;
$contador = 0;
foreach($numero as $n) {
    $soma += $n;
    //$soma = $soma + $n;
    echo $n."<br/>";
    //$contador = $contador + 1;
    $contador++;

}
echo"<br/> soma;".$soma;
//echo"<br/>Média;".$soma/$quantidade;
echo"<br/> Contador;".$contador;
echo"<br/>Média;".$soma/$contador;

?>




