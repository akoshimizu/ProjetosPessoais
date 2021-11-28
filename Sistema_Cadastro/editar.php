<?php
// including the database connection file
include_once("conect.php");

if(isset($_POST['update']))
{

	$id = mysqli_real_escape_string($mysqli, $_POST['id']);
	$codigo = mysqli_real_escape_string($mysqli, $_POST['codigo']);
	$nome = mysqli_real_escape_string($mysqli, $_POST['nome']);
	$preco = mysqli_real_escape_string($mysqli, $_POST['preco']);

	// verificam se tem campo nulo
	if(empty($codigo) || empty($nome) || empty($preco)) {

		if(empty($codigo)) {
			echo "<font color='red'>Campo nome está vazio.</font><br/>";
		}

		if(empty($nome)) {
			echo "<font color='red'>Campo idade está vazio.</font><br/>";
		}

		if(empty($preco)) {
			echo "<font color='red'>Campo email está vazio.</font><br/>";
		}
	} else {
		//updating the table
		$result = mysqli_query($mysqli, "UPDATE produto SET codigo = '$codigo', nome='$nome', preco='$preco' WHERE id=$id");

		//redirectig to the display page. In our case, it is index.php
		header("Location: ListaProd.php");
	}
}
?>
<?php
//getting id from url
$id = $_GET['id'];

//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM produto WHERE id=$id");

while($res = mysqli_fetch_array($result))
{
	$codigo = $res['codigo'];
	$nome = $res['nome'];
	$preco = $res['preco'];
}
?>
<html>
	<body>

		<form name="form1" method="post" action="editar.php">
			<table border="0">
				<tr>
					<td>Codigo</td>
					<td><input type="text" name="codigo" value="<?php echo $codigo;?>"></td>
				</tr>
				<tr>
					<td>Nome</td>
					<td><input type="text" name="nome" value="<?php echo $nome;?>"></td>
				</tr>
				<tr>
					<td>Preço</td>
					<td><input type="text" name="preco" value="<?php echo $preco;?>"></td>
				</tr>
				<tr>
					<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
					<td><input type="submit" name="update" value="Atualizar"></td>
				</tr>
			</table>
		</form>
	</body>
</html>
