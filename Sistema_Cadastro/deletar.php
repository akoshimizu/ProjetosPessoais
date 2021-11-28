<?php
  include_once ("conect.php");
  $id = $_GET['id'];

  $result = mysqli_query($mysqli, "DELETE FROM produto where id = $id");

  header ("Location: listaprod.php");

// DELETE from cliente where CNPJ = 0;
 ?>
