<?php include_once'cabecalho.php'; ?>

<?php
$id = $_GET["id"]; //resgate do id enviado pelo link
include_once'./conexao.php';
$sql = "select * from Cliente where idcliente =".$id;

$result = mysqli_query($con,$sql);
$row = mysqli_fetch_array($result);