<?php
// PASSO = 1 pagar os dados da tela
$nome = $_POST["nome"];
$email = $_POST["email"];
$telefone = $_POST["telefone"];
$dtcadastro = date("Y-m-d");// padrão do banco


// Passo 2 - Montar a conexão com o banco de dados
include_once'./conexao.php';

// Passo 3 - Montar o sql de gravar no banco
$sql = "insert into cliente values(null,'".$nome."','".$email."','".$telefone."','".$dfcadastro."')";

// passo 4 -> Mandar esse comando para mysql
if (mysqli_query($con,$sql)){
    $msg ="Gravado com sucesso";

}else{
    $msg ="Erro ao gravar!";

}
mysqli_close($con);
echo"<script> alert('".$msg."');
location.href='index.php';</script>";


?>