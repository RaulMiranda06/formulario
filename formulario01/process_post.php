
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = htmlspecialchars($_POST['nome']);
    $email = htmlspecialchars($_POST['email']);
    $idade = htmlspecialchars($_POST['idade']);

    echo "cadastro realizado <br> nome: $nome <br> email: $email <br> idade: $idade ";

} else {
    echo "<h1>Acesso Inválido</h1>";
    echo "<p>Por favor, envie o formulário corretamente.</p>";
}


?>