<?php
     if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = htmlspecialchars($_POST['num1']);
        $operacao = htmlspecialchars($_POST['operacao']);
        $num2 = htmlspecialchars($_POST['num2']);
        
        echo "<h1> Resultado da operação </h1>";

        switch ($operacao){
            case "adicao":
                $resultado = $num1 + $num2;
                echo"<p> $num1 + $num2 = $resultado </p>";
                break;
        
            case "subtracao":
                $resultado = $num1 - $num2;
                echo"<p> $num1 - $num2 = $resultado </p>";
                break;
            
            case "multiplicao":
                $resultado = $num1 * $num2;
                echo"<p> $num1 x $num2 = $resultado </p>";
                break;
    
            case "divisao":
                $resultado = $num1 / $num2;
                echo"<p> $num1 / $num2 = $resultado </p>";

            break;
        }

    } else {
        echo "<h1>Acesso Inválido</h1>";
    }
    

    ?>