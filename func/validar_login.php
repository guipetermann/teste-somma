<?php

require_once("../banco/conexao.php");


$usuario = $_POST['usuario'];
$senha = $_POST['senha'];
$sql = "SELECT * FROM `usuario` ";
$res = mysqli_query($con, $sql);
while ($reg = mysqli_fetch_assoc($res)) {
  $usuarioDB = $reg['nome_usuario'];
  $senhaDB = $reg['senha'];
}
if ($usuarioDB == $usuario and $senhaDB == $senha) {
  session_start();
  header("Location: ../lista-usuarios.php");
} else {
?>

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="../style.css">
  </head>

  <body>
    <p style="font-size: 30px;font-weight: bold;margin-top: 100px;">Usuario ou senha incorreto, tente novamente</p>
    <a style="font-size: 25px;font-weight: bold;border: 1px solid;padding: 10px;" href="../index.php"">Clique aqui para voltar</a>
  </body>

<?php
}
