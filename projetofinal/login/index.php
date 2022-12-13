<html>
   <cabeça>
       <title>Sistema de Login</title>
   </cabeça>
   <corpo>
       <h1>área restrita</h1>
       <h>
       <form  action =" verificaerlogin.php " method =" post ">
           Entrar: <br/>
           <input  type =" text " name =" login " /><br/>
           <br/><br/>
           Senha: <br/>
           <input  type =" senha " nome =" senha " /><br/>
           <br /> <br/>
           <input  type =" submit " value =" Logar " /><br/>
        </forma>
        <?php
        if (isset( $_GET [" mensagem "])) {
           echo  $_GET [" msg "];
        }

        ?>
   </corpo>
</html>