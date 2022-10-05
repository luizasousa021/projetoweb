<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercicio1</title>
</head>
<body>
    
    <form action="lista3.php" method="get">
        Digite o Valor do Raio:
        <input type="number" name="raio"/>
        <br/><br/>
        <imput type="submit" value="Calcular Raio!">
</form>
<?php
    //entrada
    $raio = $_GET["raio"];
    // P R O C E S S A M E N T O
    // area = pi * r ao quadrado
    $m_pi = 3.1415;
    //$area = $m_pi * $raio* $raio;
    $area = $m_pi * $raio**2;
    $perimetro = 2 * $m_pi * $raio;
    // SAÍDA
    echo "<br/>O valor da Área " .$area." Do raio informado ".$raio;
    echo "br/>O valor do perimetro do raio " .$raio." é ".$perimetro;
    ?>
    
</body>
</html>