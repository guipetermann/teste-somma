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
    <div class="body-usuario">
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

        <div class="div-apagar">
          <form id="id" method="POST" action="func/apagar_usuario.php"">
        <input style=" display: none !important;" type=" hidden" name="id" id="id" value="<?php echo $id ?>">
            <div class="campos-apagar">
              <div>
                <div class="editar-esquerda">
                  <div>
                    <label>Nome: <?php echo $nome ?></label>
                  </div>
                  <div>
                    <label>Cpf: <?php echo $cpf ?></label>
                  </div>
                </div>
                <div class="editar-direta">
                  <label>RG: <?php echo $rg ?></label>
                  <label>Telefone: <?php echo $telefone ?></label>
                </div>
              </div>
              <div class="btn-cadastro"><button type="submit" value="salvar">Deletar Usuario</button></div>
            </div>

          </form>

        <?php
      }
        ?>

        </div>
    </div>
</body>