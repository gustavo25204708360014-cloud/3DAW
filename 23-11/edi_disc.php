<?php
$id_disc = $_GET["id_disc"];

$sql_mostrar = "SELECT * from disciplinas where id_disc = $id_disc";
$smt = mysqli_query($coon, $sql_mostrar);
$dados = mysqli_fetch_assoc($smt);


if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $nome = $_POST['nome'];
    $id = $_POST['id_disc'];
    $sigla = $_POST['sigla'];
    $carga = $_POST['carga'];

 $sql_edit = "UPDATE disciplinas SET nome = $nome, sigla = $sigla, carga = $carga WHERE id_disc = $id";
 mysqli_query($coon, $sql_edit);

 echo"alterado com sucesso";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="edi_disc.php" method="post">
        <input type="hidden" value="<?php echo $dados['id_disc']?>">
        Nome: <input type="text" value="<?php echo $dados["nome"] ?>">
        Sigla: <input type="text" value="<?php echo $dados["sigla"] ?>">
        Carga: <input type="text" value="<?php echo $dados["carga"] ?>">
        <input type="submit" value="enviar">
    </form>
    <a href="lista_disc.php">voltar para lista</a>
</body>
</html>