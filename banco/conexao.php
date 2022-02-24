<?php

$servidor   = "localhost";
$usuario    = "root";
$senha      = "";
$banco      = "somma-test";
$con = mysqli_connect($servidor, $usuario, $senha, $banco);
mysqli_set_charset($con, 'utf8');
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

mysqli_select_db($con, $banco);
