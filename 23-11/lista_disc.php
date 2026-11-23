<?php
require_once("includes/conexao.php");

$sql = "select * from disciplina";
$smt = mysqli_query($coon, $sql);




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <a href="add_disc">adicionar</a>

<table>
 <tr>
    <td>id_disciplina</td>
    <td>nome</td>
    <td>sigla</td>
    <td>carga</td>
 </tr>

 <tr>
 <?php while($dados = mysqli_fetch_assoc($smt)){?>
    <td><?php echo $dados["id_disc"]?></td>
    <td><?php echo $dados["nome"]?></td>
    <td><?php echo $dados["sigla"]?></td>
    <td><?php echo $dados["carga"]?></td>
    <td><a href="edi_disc?id_disc=<?php echo $dados["id_disc"]?>">editar</a></td>
      <td><a href="exc_disc?id_disc=<?php echo $dados["id_disc"]?>">excluir</a></td>
    
 <?php }?>
 </tr>
</table>
    
</body>
</html>