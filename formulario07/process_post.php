<?php
     if ($_SERVER["REQUEST_METHOD"] == "POST" ) {
        $nome = htmlspecialchars($_POST['nome']);
        $email = htmlspecialchars($_POST['email']);
        $evento = htmlspecialchars($_POST['evento']);           
        
    echo"participantes de um evento <br> Nome: $nome <br> Email: $email <br> Evento: $evento ";

    } else {
        echo "<h1>Acesso Inválido</h1>";
    }
?>