<?php
require_once("./banco/conexao.php");
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Editar Usuario</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <div class="body">
    <div class="bg-top">
      <h1>Editar Usuario</h1>
    </div>
    <div class="body-editar">
      <?php
      $id = $_GET['id'];
      if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = "SELECT * FROM test_crud WHERE id = '$id'";
        $res = mysqli_query($con, $sql);
        while ($reg = mysqli_fetch_assoc($res)) {

          $nome = $reg['nome'];
          $cpf = $reg['cpf'];
          $rg = $reg['rg'];
          $telefone = $reg['telefone'];
        }
      ?>

        <div class="div-editar">
          <form id="id" method="POST" action="func/editar_usuario.php"">
        <input style=" display: none !important;" type=" hidden" name="id" id="id" value="<?php echo $id ?>">
            <div class="campos-editar">
              <div class="editar-esquerda">
                <div>
                  <label>Nome:<input type="text" name="nome" id="nome" value="<?php echo $nome ?>" required></label>
                </div>
                <div>
                  <label>Cpf:<input type="number" name="cpf" id="cpf" value="<?php echo $cpf ?>" required> </label>
                </div>
              </div>
              <div class="editar-direta">
                <div> <label>RG:<input type="number" name="rg" id="rg" value="<?php echo $rg ?>" required></label></div>
                <div> <label>Telefone <input type="tel" name="telefone" required maxlength="10" placeholder="(48)9999-9999" [0-9]{2}-[0-9]{4}-[0-9]{4} value="<?php echo $telefone ?>" required></label></div>
              </div>
            </div>
            <div class="btn-cadastro"><button type="submit" value="salvar">Salvar Alterações</button></div>
        </div>

        </form>

      <?php
      }
      ?>

    </div>
</body>