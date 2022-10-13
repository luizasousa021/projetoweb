<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="">
        Digite um salário:<br/>
        <inpt type="text" name="sal">
        <br/>
        Digite o total gasto:<br/>
        <input type="text" name="totg">
        <br/>
        <input type="submit" value="Calcule">
    </fomr>
    <?php
    $sal = $_GET["sal"];
    $totg = $_GET["totg"];
    if (totg > sal) {
        echo" Orçamento estourado";
    }else{
        echo"Gasto dentro do orçamento";
    }
    ?>
    
</body>
</html>