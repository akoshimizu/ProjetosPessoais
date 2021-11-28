<?php
  include_once ("conect.php");
  $id = $_GET['id'];

  $result = mysqli_query($mysqli, "DELETE FROM cliente where id = $id");

  header ("Location: ListaCliente.php");


 ?>
