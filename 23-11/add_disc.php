<?php
require_once("includes/conexao.php");

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $nome = $_POST["nome"] ?? "";
    $sigla = $_POST["sigla"] ?? "";
    $carga = $_POST["carga"] ?? "";

    $sql = "insert into disciplinas (`nome`, `sigla`, `carga` ) VALUES ('$nome', '$sigla', $carga)";
    if(mysqli_query($coon, $sql)){
        echo"$nome incluido com sucesso na tabela disciplina";
    }else{
        echo"erro no banco";
    }
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

<form action="add_disc.php" method="post">
    nome: <input type="text" name="nome">
    sigla: <input type="text" name="sigla">
    carga <input type="text" name="carga">
    <input type="submit" value="enviar">
</form>

<a href="lista_disc.php">voltar para lista</a>
    
</body>
</html>