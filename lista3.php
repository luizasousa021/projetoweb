<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercicio3</title>
</head>
<body>
    <!-- faça um scrit que peça dois 
    números e imprima a soma-->

    <form action="lista3.php" meethod="get">
        Digite o 1 número: <br/>
        <input type="number" name="numero1"/>
        <br/><br/>
        Digite o 2 número: <br/>
        <input type="number" name="numero2"/>
        <br/><br/>
        <imput type="sumbmit" value="calcular"/>

   </form>
   <?php
   $numero1 = $_GET["numero1"];
   $numero2 = $_GET["numero2"];
   
   $omar = $numero1 + $numero2;

   echo" A soma de ".$numero1." com ".numero2." é : ".somar;
   
   ?>
        
</body>
</html>
