<?php include_once'cabecalho.php'; ?>
<h4>Consultar por Nome</h4>
<form action="" method="">
   Nome:<br/>
   <input type="text"
   placacholder="Digite o nome para uscar"
   name="nome" requited /> 
   <br/><br/>
   <input type="submit" value="Buscar"/>

</form>
<?php
if(isset($_GET{"nome"})){
// pegar o campo nome da tela
$nome = $_GET["nome"];

// abrir a conexão com o banco
include_once'./conexao.php';

//Montar a instrução sql para buscar a informação
$sql = "select * from cliente where nome like '".$nome. "%'";

// mysql_query() -> executa a instrução no banco
$result = mysqli_query($con,$sql);
if(mysqli_num_rows($result)>0){

?>
<table class="table">
   <tr>
        <td>Nome</td>
        <td>Email</td>
        <td>Telefone</td>
        <td>Data do cadastro</td>
        <td>editar</td>
        <td>Excluir</td>

   </tr>
<?php
while ($row = mysqli_fetch_array($result)){
   ?>
   <tr>
         <td><?php echo $row["nome"]; ?></td> 
         <td><?php echo $row["email"]; ?></td>
         <td><?php echo $row["telefone"]; ?></td> 
         <td><?php echo $row["dtcadastro"]; ?></td>
         <td> <a href="editar.php?id=<?php echo $row["idecliente"];?>">
          <img src="./img/download.jfit"/> </a> </td>
         <td><img src="./img/images.jfif"/></td>
   </tr>
   <?php

}
}else{
   echo" Não existe Cliente com este nome.";

}
}
include_once'./rodape.php';

?>
   