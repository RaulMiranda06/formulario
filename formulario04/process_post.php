<?php
     if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = htmlspecialchars($_POST['nome']);
        $email = htmlspecialchars($_POST['email']);
        $assunto = htmlspecialchars($_POST['assunto']);
        $mensagem = htmlspecialchars($_POST['mensagem']);
        


       echo "<h4>Contato concluindo</h4>";
       echo "<p>Nome: $nome</p>";
       echo "<p>Email: $email</p>";
       echo "<p>Assunto: $assunto</p>";
       echo "<p>Mensagem: $mensagem</p>";

    } else {
        echo "<h1>Acesso Inválido</h1>";
    }

    ?>