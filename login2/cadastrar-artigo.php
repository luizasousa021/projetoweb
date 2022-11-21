<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Cadastro de Artigo</h1>
    <br>
    <form action="gravar-artigo.php" method="post"
    enctype="multipart/form-data">
    Título do Artigo : <br/>
    <input type="text" name="titulo" required="required"/>
    <br/><br/>
    Autor : <br/>
    <input type="text" name="autor" required="required"/>
    <br/><br/>
    Artigo : <br/>
    <textarea name="artigo" cols="20" rows="5"></textarea>
    <br/><br/>
    Foto : <br/>
    <input type="file" name="foto" required="required"/>
    <br/><br/>
    <input type="submit" value="Cadastrar Artigo"/>
    <br/><br/>

</form>

</body>
</html>