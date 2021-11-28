<!DOCTYPE html>
<html lang="pr-br">
    <meta charset="utf-8">
  <body>

<?php
include_once("conect.php");

$emp = $_POST['empresa'];
$cnpj = $_POST['cnpj'];
$tel = $_POST['telefone'];
$logr = $_POST['logradouro'];
$comple = $_POST['complemento'];
$cid = $_POST['cidade'];
$est = $_POST['estado'];


$in = "INSERT INTO Cliente (empresa, cnpj, telefone, logradouro, complemento, cidade, estado)
VALUES ('$emp','$cnpj','$tel','$logr','$comple','$cid','$est')";

  if (mysqli_query($mysqli, $in))
  {
    echo "Cliente Cadastrado.";
  }
  else
  {
    echo "Erro: ". mysqli_error($mysqli);
  }
  mysqli_close($mysqli);

 ?>

    <form action="cadastrocliente.html" method="post">
        <input type="submit" value="voltar">
    </form>
  </body>
</html>
