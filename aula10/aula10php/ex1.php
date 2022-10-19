<?php
$carro = array("gol","celta","fox","corola","string","civic");
var_dump($carro);
echo"<br/>============== <br/>";
$carros1[]="gol";
$carros1[]="hilux";
$carros1[]="camaro";
$carros1[]="ferrari";
$carros1[]="porsche";
$carros1[]="brasília";
var_dump($carros1);

echo"<br/>============== <br/>";
echo" eu tenho um ".$carros1[0];  // impresso um item do vator


echo"<br/>============== <br/>";  // impresso um item do vator 
echo" eu tenho um ".$carro[0];
echo"<br/>============== <br/>";

echo"<br/>============== <br/>";
// o que ocorre é o seguinte... fazemos com que o array $car assuma o vator
// de cada elemento de array maior $carro
foreach($carro as $car){
    // impresso todos o conteúdo do vator
    echo $car."<br/>";

}

?>