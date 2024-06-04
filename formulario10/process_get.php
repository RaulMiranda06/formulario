<?php
     if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $filme = htmlspecialchars($_POST['filme']);
       

        echo "<h1>votaçao encerrada </h1>";

        if ($filme == 'a') {
            echo"<p> o melhor filme é velozes furiosos 1 </p>";
        }    
        
        if ($filme == 'b') {
            echo"<p> o melhor filme é velozes furiosos 2 </p>";
        } 

        if ($filme == 'c') {
            echo"<p> o melhor filme  é velozes furiosos 3 </p>";
        } 

        if ($filme == 'd') {
            echo"<p> o melhor filme  é velozes furiosos 4 </p>";
        } 

        
        if ($filme == 'e') {
            echo"<p> o melhor filme  é velozes furiosos 5 </p>";
        } 

        if ($filme == 'f') {
            echo"<p> o melhor filme  é velozes furiosos 6 </p>";
        } 

        if ($filme == 'g') {
            echo"<p> o melhor filme  é velozes furiosos 7 </p>";
        } 

        if ($filme == 'h') {
            echo"<p> o melhor filme  é velozes furiosos 8 </p>";
        } 

        if ($filme == 'i') {
            echo"<p> o melhor filme  é velozes furiosos 9 </p>";
        } 

        if ($filme == 'j') {
            echo"<p> o melhor filme  é velozes furiosos 10 </p>";
        } 

        
       
    

    } else {
        echo "<h1>Acesso Inválido</h1>";
    }
    
  
    
    
    
    ?>