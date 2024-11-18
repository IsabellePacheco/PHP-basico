<!-- usando a função GET-->
<!-- GET: método HTML padrão, a requisição é enviada como uma string anexada a URL -->
<!-- esse programa recebe dois valores pela URL usando o método GET -->

<?php
// $variável PHP  'variável back end
    $numero1 = $_GET['numero1'];
    $numero2 = $_GET['numero2'];


// Verifica se os valores foram passados corretamente 
if(isset($numero1) && ($numero2)){
    // converte para valor inteiro
    $numero1 = (int)$numero1;
    $numero2 = (int)$numero2;

    // operações básica
    // soma
    $soma = $numero1 + $numero2;
    // subtrair
    $subtracao = $numero1 - $numero2;
    // mutiplicar
    $multiplicacao = $numero1  * $numero2;
    // dividir
    $divisao = $numero1 / $numero2;



    // exibir resultados 
    echo "A soma é; $soma <br>";
    echo "A subtração é; $subtracao <br>";
    echo "A multiplicação é; $multiplicacao  <br>";
    echo "A divisão é; $divisao  <br>";


} else{
    echo "ATENÇÃO, Por favor, forneça os valores de numero1 e numero2 pela URL.";
}


?>

http://localhost/php-basico-IsabellePacheco/2_opera_variaveis.php?numero1=100&numero2=30