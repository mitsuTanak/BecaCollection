<?php

include_once("conexao.php");

$nome = filter_input(INPUT_POST, 'nome');
$email = filter_input(INPUT_POST, 'email');

// echo "Nome: $nome <br>";
// echo "Senha: $senha <br>";

$result_cadastro = "INSERT INTO cadastro(nome, email, created) VALUES('$nome', '$email', NOW())";
$resultado_cadastro = mysqli_query($conn, $result_cadastro);


if (mysqli_insert_id($conn)) {
    header("location: index.php");
}else{
    header("location: index.php");
}
?>