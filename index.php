<?php
require_once("./banco/conexao.php");
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title></title>
</head>

<body>
  <Header>
    <div>
      <p class="titulo">Bem vindo</p>
    </div>
  </Header>
  <div class="div-body">
    <div class="login">
      <form id="id" method="POST" action="func/validar_login.php"">
      <div class=" alinha-login">
        <label>Usuario <input type=" text" name="usuario" id="usuario" require></label>
        <label>Senha <input type="password" name="senha" id="senha" require></label>
    </div>
    <div class=" btn-cadastro">
      <button type="submit" value="logar">Login</button>
    </div>
    </form>
  </div>
  </div>
  </div>
</body>

</html>