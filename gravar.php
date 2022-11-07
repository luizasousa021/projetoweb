<?php 
date_default_timezone_get("america/Sao_Paulo");
// resgate de dados da tela
$nome = $_POST["nome"];
$email = $_POST["email"];
$telfone = $_POST["telefone"];
$dtcadastro = date("Y-m-d");// padrão do banco
// abrir conexão com banco de dados.
incluide_once'conexão.php';
// Montar b sql de gravação
//(null,'ana','ana@gmail.com','1111-2222',2011-11-03');
$sql = "insert ito clinte values
(null,'",$nome,"','",$email,"','",$telfone,"','".$dtcadastro,"')";


if(mysqli_query($con,$sql)){
    $msg = "Gravado com sucesso";
}else{
    $msg = "Erro ao Gravar!";
}
// fechar a conexão


