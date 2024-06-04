<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $text= htmlspecialchars($_GET['text']);

    echo "<h4>Resultado da Pesquisa:  $text </h4>";
    
    
} 
?>
