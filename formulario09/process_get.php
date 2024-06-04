<?php
     if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $pergunta01 = htmlspecialchars($_POST['pergunta01']);
        $pergunta02 = htmlspecialchars($_POST['pergunta02']);
        $pontuacao = 0;


        if($pergunta01 == "c"){
            $pontuacao++;
        }

        if($pergunta02 == "a"){
            $pontuacao++;
        }

        echo"<h4> Sua Pontuação  </h4>";
        echo"<p> voce acertou $pontuacao /2 ";
    
       
    }
    else{
        echo "<h1>Acesso Inválido</h1>";
    }
    
  
    
    
    
    ?>