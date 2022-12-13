<?php session_start();
?>
<html>
   <cabeça>
       <title> Sistema de Login </title>
   </cabeça>
   <corpo>
        <h1> Painel do Sistema </h1>
              <?php
            echo " <br>Seja Bem Vindo(a) ". $_SESSION [" nome "];

            echo " <hr>Menu : ";
            if ( $_SESSION [" perfil "] == " adm ") {
                include_once 'menu_adm.php' ;
            } senão {
                include_once 'menu_usuario.php' ;
            }



        ?>
    </corpo>
</html> 