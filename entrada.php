<?php
session_start();
$login = "admin";
$senha = crypt(md5('123'), 'projeto03');
//variavel declarada dentro do if, não esqueça
if (isset($_POST['logar'])) {
  $senhacomp = crypt(md5($_POST['senha']), 'projeto03');
  if ($senhacomp == $senha && $_POST['login'] == $login) {
    $_SESSION['user'] = $_POST['login'];
    header('Location:tela.php');
    //echo "<script> alert('Login permitido');</script>";
  } else {
    echo "<script> alert('Login e/ou Senha incorretos');</script>";
  }
}

?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</head>

<body>
  <form method="post" action="">
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Login</label>
      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="loginHelp" name="login">
      <div id="loginHelp" class="form-text">Escreva seu nome de usuário</div>
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Senha</label>
      <input type="password" class="form-control" id="exampleInputPassword1" name="senha">
    </div>
    <input type="submit" class="btn btn-primary" value="Logar" name="logar"></input>



  </form>
</body>

</html>