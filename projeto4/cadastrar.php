<?php include_once'cabecalho.php'; ?>

   <h4>Atualização do cliente</h4>
  
   <form action="atualizar.php" method="post">

       nome:<br/>
       <input type="text" name="nome" <br/><br/>
       
       E-mail:<br/>
       <input type="text" name="email"
       placeholder="Digite o email"
       raquired/>
       <br/><br/>
       Telefone:<br/>
       <input type="text" name="telefone"
       placeholder="Digite o telefone"
       raquired/>
       <br/><br/>
       <input type="submit" value="cadastrar"/>
</form>
<?php

