<?php
include_once ("conect.php");
$result = mysqli_query($mysqli, "SELECT * FROM cliente ORDER BY id ");
 ?>


<html lang="pt-br">
  <meta charset="utf-8">
    <body>
      <table width='80%' border = 0>
        <tr bgcolor = '#CCCCCC'>
            <td>Empresa</td>
            <td>CNPJ</td>
            <td>Telefone</td>
            <td>Logradouro</td>
            <td>Complemento</td>
            <td>Cidade</td>
            <td>Estado</td>
            <td>Atualização</td>
        </tr>
        <?php
        while($res = mysqli_fetch_array($result))
        {
          echo "<tr>";
          echo "<td>".$res['empresa']."</td>";
          echo "<td>".$res['cnpj']."</td>";
          echo "<td>".$res['telefone']."</td>";
          echo "<td>".$res['logradouro']."</td>";
          echo "<td>".$res['complemento']."</td>";
          echo "<td>".$res['cidade']."</td>";
          echo "<td>".$res['estado']."</td>";
          echo "<td><a href=\"editCliente.php?id=$res[id]\">Editar</a> | <a href=\"delCliente.php?id=$res[id]\" onClick=\"return confirm('Tem certeza que você quer remover?')\">Deletar</a></td>";
        }
         ?>
       </table>
       <form action="CadastroCliente.html" method="post">
         <input type="submit" value="Voltar">
       </form>
    </body>
</html>
