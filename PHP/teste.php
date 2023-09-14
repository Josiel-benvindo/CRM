<?php
include 'conexao.php'; // Inclua o arquivo de conexão que você configurou anteriormente

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $email = $_POST["email"];

    $sql = "INSERT INTO teste (nome, email) VALUES ('$nome', '$email')";

    if ($conexao->query($sql) === TRUE) {
        echo "Dados inseridos com sucesso!";
    } else {
        echo "Erro ao inserir dados: " . $conexao->error;
    }

    $conexao->close(); // Feche a conexão
}
?>