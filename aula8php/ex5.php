<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex5</title>
</head>
<!--Ler umvalor N imprimir todos os valores interiros entre 1 (inclusive)
considere que oN será sempre maior que ZERO,-->

<body>
    <form>
       Digite um valor qualque;
       <input type="text" name="num">
       <br/><nr/>
       <input type="submit"value="Enviar">
       <br/><br/>
    </form>

    <?php
    if (isset($_GET["num"])){
        $num = $_GET["num"];
        if ($num<= 0) {
            echo" Digite um valor positivo";
        } else {

            for ($i = 1; $i <= $num; $i++){
                echo $i.",";
            }

        }
    }


    ?>
</body>
</html>