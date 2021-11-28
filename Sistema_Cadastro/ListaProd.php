<?php
include_once ("conect.php");
$result = mysqli_query($mysqli, "SELECT * FROM Produto ORDER BY Codigo ");
 ?>


<html lang="pt-br">
  <meta charset="utf-8">
    <body>
      <table width='80%' border = 0>
        <tr bgcolor = '#CCCCCC'>
            <td>Código do produto</td>
            <td>Nome do Produto</td>
            <td>Preço</td>
            <td>Manutenção</td>
        </tr>
        <?php
        while($res = mysqli_fetch_array($result))
        {
          echo "<tr>";
          echo "<td>".$res['codigo']."</td>";
          echo "<td>".$res['nome']."</td>";
          echo "<td>".$res['preco']."</td>";
          echo "<td><a href=\"editar.php?id=$res[id]\">Editar</a> | <a href=\"deletar.php?id=$res[id]\" onClick=\"return confirm('Tem certeza que você quer remover?')\">Deletar</a></td>";
        }
         ?>
       </table>
       <form action="cadastroprod.html" method="post">
         <input type="submit" value="Voltar">
       </form>
    </body>
</html>
