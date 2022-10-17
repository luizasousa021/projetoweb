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
        digite um valor qualquer;
        <input type="text" name="num"/>
        <br/> <br/>
        <input type="submit" value="Enviar"/>
    </form>
    <?php
    if (isset($_GET["num"])){
        $num = $_GET ["num"];
        for ($i=1; $i <=$num ; $i++) {
            echo $i. " , ";
        }
    }
    $num = $_GET["num"];
    for ($i=1; $i <= $num; $i++) {
        echo $i." , ";
    }

    ?>
</body>
</html>
