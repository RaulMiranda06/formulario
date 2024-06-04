<?php
     if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $produto = htmlspecialchars($_POST['produto']);
        $avaliacao = htmlspecialchars($_POST['avaliacao']);
        $comentario= htmlspecialchars($_POST['comentario']);
        

        echo"<h1>Avaliação de Produtos de Celulares</h1>";
        echo"<p> Produto:  $produto </p>";
        echo"<p> Avaliação: $avaliacao </p>";
        echo"<p> Comentario: $comentario  </p>";    
    
    }



    else {
        echo "<h1>Acesso Inválido</h1>";
    }

    ?>