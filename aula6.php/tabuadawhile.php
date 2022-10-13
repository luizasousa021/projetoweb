<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="">
        qual tabuada?
        <input type="text" name="num">
        <br>
        <input type="submit" volue="Calcule">
    </form>
    <?php
    $num = $_GET["num"];

    $i = 0;
    while($i <= 10) {
        echo $num . " * ".$i. "=". $num * $i. "<br/>";
        //$i = $i + 1;
        $i++;
    }

    ?>

</body>
</html>