<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Clientes</title>
</head>
<body>
    <h2>Tela de cadastro</h2>
    <!-- método POST -->
    <form method="post" action="">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" required><br>

        <label for="email">Email:</label>
        <input type="email" name="email" required><br>

        <label for="telefone">Telefone:</label>
        <input type="text" name="telefone" required><br>

        <button type="submit">Cadastrar</button>
    </form>

    <?php
    // Verifica se o formulário foi enviado
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Recebe os valores enviados pelo formulário
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];

        // Conecta ao banco de dados
        $servername = "localhost:3309";
        $username = "root";
        $password = "";
        $dbname = "exercicio";

        $conn = new mysqli($servername, $username, $password, $dbname);

        // Verifica a conexão
        if ($conn->connect_error) {
            die("Falha na conexão: " . $conn->connect_error);
        }


        // resgistro no banco de dados
        // inserir na tabela clientes os seguintes valores
        $sql = "INSERT INTO clientes (nome, email, telefone) VALUES ('$nome', '$email', '$telefone')";

        // conferir se a varaiavel 'sql' esta correta
        if ($conn->query($sql) == TRUE) {
            // exibe a mensagem
            echo  "<p style='color: green; '>Cliente cadastrado com sucesso!</p>";
        } else {
            // exibea mensagem
            echo "<p style='color: red; '> Erro ao cadastrar: " . $conn->error ."</p>";
        }

        // exibe a conexão
        $conn->close();
    }
    ?>
</body>
</html>
