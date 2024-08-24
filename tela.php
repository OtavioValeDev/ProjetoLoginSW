<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    Bem Vindo, <?php echo $_SESSION['user']; ?>!
    <br>
    <a href="entrada.php"><button>Saia e volte ao Login</button> </a>
</body>

</html>