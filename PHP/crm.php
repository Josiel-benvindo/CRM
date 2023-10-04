<?php
include 'conexao.php'; // Inclua o arquivo de conexão que você configurou anteriormente

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $nome_imp = $_POST["nomeimp"];
    $celular = $_POST["contato"];
    $area = $_POST["areaatua"];
    $cargo = $_POST["cargo"];

    $sql = "INSERT INTO form (nome, email, nome_imp, celular, area, cargo) VALUES ('$nome', '$email','$nome_imp','$celular','$area','$cargo')";

    if ($conexao->query($sql) === TRUE) {
        echo "<center><div>Dados inseridos com sucesso!</div></center>";
    } else {
        echo "Erro ao inserir dados: " . $conexao->error;
    }

    header("Location: ../html/pagina.html");
    exit();

    $conexao->close(); 
}
?>