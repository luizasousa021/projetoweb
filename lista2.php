<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>exercicio2</title>
</head>
<body>
    <!-- 2.faça um programa que peça
    um número e então  mostre a mensagem
    o número informado foi [número]. -->

     <form action="lista2.php" method="get">
        Digite um número;
        <input type="number" name="numero"/>
        <input type="submit" value="enviar"/>
     </form>
     <?php
     $numero = $_GET["numero"];
     echo" o Número Informado foi;".$numero;
     ?>


</body>
</html>