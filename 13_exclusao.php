<!-- Passar id via URL -->
<!-- http://localhost/php-basico-IsabellePacheco/13_exclusao.php?id=2-->

<?php
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


// Verifica se um ID foi passado via URL para exclusão
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    

    // deleta o registro do cliente com ID especifico
    $sql = "DELETE FROM clientes WHERE id='$id' ";

    if ($conn->query($sql) === TRUE) { 
        echo "<p> Cliente excluido com sucesso!</p>";
    }else{
        echo "<p>Erro ao excluir clientes:". $conn->error . "</p>";
    }
}

// Fecha a conexão
$conn->close();
?>
