-**<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="">
        Digite um número:<br/>
        <imput type="text" name="n1">
        <br/>
        Digite outro numero:<br/>
        <input type="text" name="n2">
        <br/>
        <input type="submit" value="Calcule">
    </form>
    <?php
    $n1 = $_GET["n1"];
    $n2 = $_GET["n2"];
    if ($n1 > $n2) {
        echo"O numero 1" .$n1. "é maior que" .$n2;
    }else{
        echo"O numero 2" .$n2. "é maior que" .$n1;
    }
    ?>+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++*
</body>
</html>