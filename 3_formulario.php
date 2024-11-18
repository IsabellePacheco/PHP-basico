<!-- usando o método POST -->
<!-- POST: método HTML padrão, a requisição é enviada DIRETAMENTE no corpo do HTML -->


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo de formulario de cadastro </title>
</head>
<body>
    <!-- Método pode ser POST ou GET -->
    <form method="post" action="">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" require><br>

        <label for="email">Email:</label>
        <input type="email" name="email" require><br>

        <label for="telefone">Telefone:</label>
        <input type="text" name="telefone" require><br>

        <button type="submite">Enviar</button>
    </form>


    <!-- Programa PHP -->
    <?php
    // verifica se o formulario foi enviado 
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        // recebe os valores enviados pelo formulário
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];

        // exibe os valores recebidos
        echo "<h2> Dados Recebidos:</h2>";
        echo "Nome do usuário: $nome <br>";
        echo "E-mail do usuário: $email <br>";
        echo "Telefone do usuário: $telefone <br>";
    }

    ?>
</body>
</html>