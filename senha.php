<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <p>Coloque a senha</p>
        <input type="text" name="user" id="user" placeholder="Escreva o Usuário">
        <input type="text" name="senha" id="senha" placeholder="Escreva a Senha" require>
        <input type="submit" name="btnEnviar" id="btnEnviar" value="Enviar">
    </div>
</body>
</html>
<?php
    $senha=isset($_POST["senha"]);
    echo"essa é a senha em MD5: <br>";
    $senhamd5=md5($senha);
    echo$senhamd5;

    echo"<br><br>";

    echo"essa é a senha em crypt: <br>";
    $senhacrypt=crypt($senhamd5,'chave');
    echo $senhacrypt;

?>