<?php
     if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = htmlspecialchars($_POST['email']);

        


       echo "<h1>inscrição concluida</h1>";
       echo "<p>Email: $email , resultado dia 30/05/2024 </p>";

    } else {
        echo "<h1>Acesso Inválido</h1>";
    }
    
  
    
    
    
    ?>