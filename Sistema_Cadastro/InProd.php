<html lang="pt-br">
  <meta charset="utf-8">
    <body>
<?php
include_once ("conect.php");

$codigop =  $_POST['codProd'];
$nomep   =  $_POST['nomeProd'];
$precop  =  $_POST['precoProd'];

$in = "INSERT INTO Produto(codigo, nome, preco) VALUES ('$codigop', '$nomep', '$precop')";

if (mysqli_query($mysqli, $in))
{
  echo "Produto Cadastrado.";
}
else
{
  echo "Erro: ".mysqli_error($mysqli);
}
mysqli_close($mysqli);
 ?>

 <form action="cadastroprod.html" method="post">
   <input type="submit" value="voltar">
  </form>

  </body>
</html>
