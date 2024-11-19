<!-- Para criar o Banco de Dados -->
<!-- CREATE DATABASE exercicio; -->
<!-- USE exercicio; -->

<!-- Para criar a Tabela -->
<!-- 
    CREATE TABLE clientes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL
    ); 
-->

<!-- Para inserir dados na tabela -->
<!--
    INSERT INTO clientes (nome, email) 
    VALUES 
    ('$nome', '$email');
-->


<?php

// Alterar de acordo com o numero da porta
// verificar conexão com XAMP
$servername = "localhost:3309";
$username = "root";
$password = "";
$dbname = "exercicio";

try {
    // conexao com dados de banco
    // conferir se as informações estão corretas
    $conn = new mysqli ($servername, $username, $password, $dbname);

    // verifica se houve algum erro na conexao
    if ($conn->connect_error){
        throw new Exception("Falha na conexão: ". $conn->connect_error);
    }

    echo "Conexão realizada com sucesso!";

} catch (Exception $e){
    // exibe uma mensagem de erro amigável
    echo "Erro ao conectar ao banco de dados: " . $e->getMessage();
}

?>




