<?php
require_once("../banco/conexao.php");
session_start();
$id = $_POST['id'];
$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$rg = $_POST['rg'];
$telefone = $_POST['telefone'];
$sql = "UPDATE test_crud SET
            nome= '$nome' , cpf = '$cpf', rg = '$rg',  telefone = '$telefone' WHERE id = '$id'
        ";

$resultado = mysqli_query($con, $sql);

if ($resultado == true) {
?>

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Usuario</title>
    <link rel="stylesheet" href="../style.css">
  </head>

  <body>
    <p style="font-size: 30px;font-weight: bold;margin-top: 100px;">Alterações feitas com sucesso</p>
    <a style="font-size: 25px;font-weight: bold;border: 1px solid;padding: 10px;" href="../lista-usuarios.php"">Voltar para o inicio</a>
  </body>

  <?php
}
