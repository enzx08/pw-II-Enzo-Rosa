<?php 
include("conexao_banco.php");

$nome = $conn->real_escape_string($_POST['nome']);
$idade = $conn->real_escape_string($_POST['idade']);
$CPF = $conn->real_escape_string($_POST['CPF']);

$sql = "INSERT INTO dados (nome, idade, CPF) VALUES ('$nome', '$idade', '$CPF')";

if ($conn->query($sql) === TRUE) {
    echo "Cadastro realizado com sucesso!";
} else {
    echo "Erro ao cadastrar: " . $conn->error;
}

$conn->close();
?>