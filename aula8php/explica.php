<?php

$x = 5;
echo "<br/>valor de x ;".$x;//5
$x++;
echo "<br/>valor de x ;".$x;//6
$y = ++$x; // x= 7 primeiro incrementa
echo "<br/>valor de x ;".$x; //7
echo "<br/>valor de y ;".$y; //7
echo"=============================<br/>";
$z = 5;
echo "<br/>valor de z ;".$z; //5
$z++; // primeiro incrementa 6
echo "<br/>valor de z ;".$z; //6
$w = $z++; // w = atribui depois incrementa
echo "<br/>valor de z ;".$z;
echo "<br/>valor de w ;".$w;

?>
