<?php
require_once("./banco/conexao.php");

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
    <div class="div-cadastro-usuario"> <a href="cadastro.php">Cadastrar Usuario</a></div>
    <div class="div-usuarios">
      <?php

      $sql = 'SELECT * FROM test_crud';
      if ($res = mysqli_query($con, $sql)) {
        $id = array();
        $nome = array();
        $cpf  = array();
        $rg = array();
        $telefone = array();
        $i = 0;
        $count = $res->num_rows;
        if ($count >= 1) {
          while ($reg = mysqli_fetch_assoc($res)) {
            $id[$i] = $reg['id'];
            $nome[$i] = $reg['nome'];
            $cpf[$i] = $reg['cpf'];
            $rg[$i] = $reg['rg'];
            $telefone[$i] = $reg['telefone'];
      ?>
            <div class="usuarios">
              <div>
                <h3 class="nomes_usuarios">Nome: <?php echo $nome[$i] ?></h3>
              </div>
              <div class="cpf">
                <p>CPF: <?php echo $cpf[$i] ?></p>
              </div>
              <div class="rg">
                <p>RG: <?php echo $rg[$i] ?></p>
              </div>
              <div class="telefone">
                <p>Telefone: <?php echo $telefone[$i] ?></p>
              </div>
              <div class="link">
                <a href="editar.php?id=<?php echo $id[$i] ?>">Editar</a>
              </div>
              <div class="link">
                <a href="apagar.php?id=<?php echo $id[$i] ?>">Deletar Usuario</a>
              </div>
            </div>
          <?php
          }
          $i++;
        } else {
          ?>
          <p>Nenhum Usuario cadastrado :(</p>
      <?php
        }
      }
      ?>
    </div>
  </div>
</body>

</html>