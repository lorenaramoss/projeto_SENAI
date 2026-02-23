<?php
$nome = $_POST[ 'nome'];
$idade = $_POST['idade'];

$conexao = mysqli_connect("localhost , "root", "", "escola);

$sql = "INSERT INTO aluno (nome, idade) VALUES ('$nome', $idade)";

mysqli_query($conexao, $sql);

echo "Aluno cadastrado com sucesso!";
?>