<?php

// pegar os dados da tela

$titulo = $_POST["titulo"];
$autor = $_POST["autor"];
$artigo = $_POST["artigo"];
$foto = $_FILES["foto"];

echo var_dump($foto);
$ext = explode(".",$foto["name"]);//[foto][nome][ext]
$ext = array_reverse($ext);//[jfit][R]
$ext = $ext[0];

if(($ext != "jpg") && ($ext != "png") && ($ext != "gif")){
    echo"Arquivo Invalio!";
}elseif($foto["size"] < 1024 *20){
    echo"Tamanho excedido!";
}else{
    // vamos para o banco
    $con =mysqli_connect("localhohost","root","","artigo");
    
}






