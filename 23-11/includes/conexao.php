<?php
$host = "localhost";
$senha = "";
$user = "root";
$banco = "disciplinas";

$coon = mysqli($host, $user, $senha, $banco);

if($coon->connect_error){
    die("erro de coneao");
}






?>