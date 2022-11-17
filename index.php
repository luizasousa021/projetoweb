<html>
   <head>
       <title>Sistema de Login</title>
   </head>
   <body>
       <h1>área restrita</h1>
       <hr>
       <form action="verificaerlogin.php" method="post">
           Login:<br/>
           <input type="text" name="login" /><br/>
           <br/><br/>
           Senha/<br/>
           <input type="passaword" name="senha" /><br/>
           <br/><br/>
           <input type="submit" value="Logar" /><br/>
        </form>
        <?php
        if (isset($_GET["msg"])) {
           echo $_GET["msg"];
        }

        ?>
   </body>
</html>