<?php
$id_disc = $_GET["id_disc"];

$sql = "delete id_disc = $id_disc from disciplina";

if(mysqli_query($coon, $sql)){
    alert("excluido com sucesso");
    header_location("lista_disc.php");
}else{
    alert("erro na exclusao");
    header_location("lista_disc.php");
}




?>