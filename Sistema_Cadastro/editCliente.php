<?php
// including the database connection file
include_once("conect.php");

if(isset($_POST['update']))
{

	$id = mysqli_real_escape_string($mysqli, $_POST['id']);
	$emp = mysqli_real_escape_string($mysqli, $_POST['empresa']);
	$cnpj = mysqli_real_escape_string($mysqli, $_POST['cnpj']);
	$tel = mysqli_real_escape_string($mysqli, $_POST['telefone']);
  $logr = mysqli_real_escape_string($mysqli, $_POST['logradouro']);
  $compl = mysqli_real_escape_string($mysqli, $_POST['complemento']);
  $cid = mysqli_real_escape_string($mysqli, $_POST['cidade']);
  $estado = mysqli_real_escape_string($mysqli, $_POST['estado']);

	// verificam se tem campo nulo
	if(empty($emp) || empty($cnpj) || empty($tel)) {

		if(empty($emp)) {
			echo "<font color='red'>Campo nome está vazio.</font><br/>";
		}

		if(empty($cnpj)) {
			echo "<font color='red'>Campo idade está vazio.</font><br/>";
		}

		if(empty($tel)) {
			echo "<font color='red'>Campo email está vazio.</font><br/>";
		}
	} else {
		//updating the table
		$result = mysqli_query($mysqli, "UPDATE cliente SET empresa = '$emp', cnpj='$cnpj', telefone='$tel', logradouro = '$logr',
      complemento = '$compl', cidade = '$cid', estado = '$estado' WHERE id=$id");

		//redirectig to the display page. In our case, it is index.php
		header("Location: ListaCliente.php");
	}
}
?>
<?php
//getting id from url
$id = $_GET['id'];

//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM cliente WHERE id=$id");

while($res = mysqli_fetch_array($result))
{
	$emp = $res['empresa'];
	$cnpj = $res['cnpj'];
	$tel = $res['telefone'];
  $logr = $res['logradouro'];
  $compl = $res['complemento'];
  $cid = $res['cidade'];
  $estado = $res['estado'];
}
?>
<html>
	<body>

		<form name="form2" method="post" action="editCliente.php">
			<table border="0">
				<tr>
					<td>Empresa</td>
					<td><input type="text" name="empresa" value="<?php echo $emp;?>"></td>
				</tr>

      	<tr>
					<td>CNPJ</td>
					<td><input type="text" name="cnpj" value="<?php echo $cnpj;?>"></td>
				</tr>

        <tr>
					<td>Telefone</td>
					<td><input type="text" name="telefone" value="<?php echo $tel;?>"></td>
				</tr>

      	<tr>
					<td>Logradouro</td>
					<td><input type="text" name="logradouro" value="<?php echo $logr;?>"></td>
				</tr>

        <tr>
					<td>Complemento</td>
					<td><input type="text" name="complemento" value="<?php echo $compl;?>"></td>
				</tr>

        <tr>
					<td>Cidade</td>
					<td><input type="text" name="cidade" value="<?php echo $cid;?>"></td>
				</tr>

        <tr>
					<td>Estado</td>
					<td><input type="text" name="estado" value="<?php echo $estado;?>"></td>
				</tr>

      	<tr>
					<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
					<td><input type="submit" name="update" value="Atualizar"></td>
				</tr>
			</table>
		</form>
	</body>
</html>
