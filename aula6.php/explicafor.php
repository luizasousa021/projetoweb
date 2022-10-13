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

       for ($i=0; $i < 100 ; $i++) {
        echo $num ."*". $i. "=". $num * $i."<br/>";
       }
       
       ?>
</body>
</html>