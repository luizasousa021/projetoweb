<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="exolica5.php" method="get">
        informe o valor do Salário;<br/>
        <input type="number" name="salario">
        <br/><br/>
        <input type="sumbit" volue="Calcular">
    </form>

   <?php
   $salario = $_GET["salario"];
   if ($salario < 280){
       $reajuste =($salario * 20)/100;
       $novosalario = $salario * $reajuste;
       echo" valor do Reajuste;" .$reajuste;
       echo" valor do Salario Antigo;" .$salario;
       echo" valor do Novo Salario;" .$reajuste;

   }else if($salario >= 280 && $salario< 7000){
    $reajuste =($salario * 15)/100;
    $novosalario = $salario * $reajuste;
       echo" valor do Reajuste;" .$reajuste;
       echo" valor do Salario Antigo;" .$salario;
       echo" valor do Novo Salario;" .$novosalario;

   }else if($salario >= 700 && $salario< 1500){
    $reajuste =($salario * 10)/100;
    $novosalario = $salario * $reajuste;
       echo" valor do Reajuste;" .$reajuste;
       echo" valor do Salario Antigo;" .$salario;
       echo" valor do Novo Salario;" .$novosalario;

   }else{
    $reajuste =($salario * 5)/100;
    $novosalario = $salario * $reajuste;
       echo" valor do Reajuste;" .$reajuste;
       echo" valor do Salario Antigo;" .$salario;
       echo" valor do Novo Salario;" .$novosalario;
   }
?>
</body>
</html>