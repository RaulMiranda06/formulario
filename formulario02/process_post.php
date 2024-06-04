<?php
     if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $usuario = htmlspecialchars($_POST['usuario']);
        $senha = htmlspecialchars($_POST['senha']);
        
        if($usuario== "RAUL" && $senha == "1234" ) {
            echo "login valido";

        }
        else{
            echo "login invalido";
        }


       // echo "<h1>Login Realizado com sucesso</h1>";
       // echo "<p>Usuari: $usuario</p>";
        //echo "<p>Senha: $senha</p>";
    } else {
        echo "<h1>Acesso Inválido</h1>";
    }
    

    ?>
