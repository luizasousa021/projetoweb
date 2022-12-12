<?php
// espaço de memória no navegadoe
sessão_inicio();
$ login = $ _POST [|" login "];
$ senha = md5( $ _POST [" senha "]);
include_once './conexao.php' ;
$ sql =" select * from usuario where login = ' ". $ login ." ' e senha = ' ". $ senha ." ' ";
$ resultado = mysqli_query( $ con , $ sql );
if (mysqli_num_rows( $ resultado )== 1 ) {
    $ linha = mysql_fetch_array( $ resultado );
    $ _SESSION [" nome "] = $ linha [" nome "];
    $ _SESSION [" perfil "] = $ linha [" perfil "];
    $ _SESSION [" tempo "] = tempo(); //guardando o exato instante do longin
    cabeçalho(" localização:painel.php ");
} senão {
    $ msg = " Login/Senha inválido ";
    header(" location:index.php?msg= ". $ msg );
}

?>