<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Cadastro</title>
</head>

<body>
  <div class="bg-top">
    <h1>Cadastrar Usuario</h1>
  </div>
  <div class="div-cadastrar">
    <form action="func/cadastro-usuario.php" method="POST">
      <div class="campos-cadastrar">
        <div class="editar-esquerda">
          <div>
            <label>Nome:<input type="text" name="nome" required></label>
          </div>
          <div>
            <label>CPF:<input type="number" name="cpf" required maxlength="11" minlength="11"></label>
          </div>
        </div>
        <div class="editar-direita">
          <div>
            <label>rg:<input type="number" name="rg" required></label>
          </div>
          <div>
            <label>Telefone <input type="tel" name="telefone" required maxlength="10" placeholder="(48)9999-9999" [0-9]{2}-[0-9]{4}-[0-9]{4}></label>
          </div>
        </div>
      </div>
      <div class="btn-cadastro"><button>Cadastrar</button></div>
    </form>
  </div>
</body>

</html>