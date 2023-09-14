<?php
$host = "localhost"; // Endereço do servidor MySQL
$usuario = "root"; // Nome de usuário do MySQL
$senha = ""; // Senha do MySQL
$banco = "form-crm"; // Nome do banco de dados

$conexao = new mysqli($host, $usuario, $senha, $banco);

if ($conexao->connect_error) {
    die("Falha na conexão: " . $conexao->connect_error);
}
?>