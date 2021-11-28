<?php
include_once("conect.php");

$table = "CREATE TABLE Cliente (
          id int(6) NOT NULL auto_increment,
          empresa char(30)NOT NULL,
          cnpj int(14)NOT NULL,
          telefone int(11)NOT NULL,
          logradouro char(30)NOT NULL,
          complemento char(30)NOT NULL,
          cidade char(30)NOT NULL,
          estado char(20)NOT NULL,
          PRIMARY KEY (`id`))";
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
