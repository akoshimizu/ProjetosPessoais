<?php
include_once("conect.php");

$table = "CREATE TABLE Produto (
          id int (6) NOT NULL auto_increment,
          codigo int(6) NOT NULL,
          nome char(30) NOT NULL,
          preco int(9)NOT NULL, PRIMARY KEY  (`id`))";
if (mysqli_query($mysqli,$table))
{
  echo "Tabela criada com sucesso!";
}
else
{
  echo "Erro: ".mysqli_error($mysqli);
}
mysqli_close($mysqli);
 ?>
