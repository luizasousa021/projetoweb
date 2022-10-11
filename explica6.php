<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="exolica6.php" method="get">
        Informe o numero<br/>
        <input type="number" name="n" >
        <br/><br/>
        <input type="submit" value="verificar">
    </form>
    <?php

     $n = $_GET["n"];
     if($n % 2 == 0){
        echo" Este número é par";
     }else{
        echo" Este número é impar";
     }
    ?>
</body>
</html>