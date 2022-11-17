<?php
// espaço de mémoria no navegadoe
session_start();
$login = $_POST[|"login"];
$senha = md5($_POST["senha"]);
include_once'./conexao.php';
$sql ="select * from usuario where login = '".$login."' and senha = '".$senha."'";
$result = mysqli_query($con,$sql);
if (mysqli_num_rows($result)== 1) {
    $row = mysql_fetch_array($result);
    $_SESSION["nome"] = $row["nome"];
    $_SESSION["perfil"] = $row["perfil"];
    $_SESSION["tempo"] = time();//guardando o exato instante do longin
    header("location:painel.php");
} else {
    $msg = "Login/Senha invalido";
    header("location:index.php?msg=".$msg);
}

?>
