<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Formulario</title>
    </head>

    <body>
    <?php

    //8) Formulário de Inscrição em Newsletter:
    //Descrição: Desenvolva um formulário simples para inscrição em uma newsletter, com campo para email.
    //Objetivo: Enviar o email usando o método POST e exibir uma mensagem de confirmação em um script PHP.

    ?>
    
    <h1>inscrição em uma newsletter (POST)</h1>
    <form action="process_get.php" method="POST">
        
        <label for="email">Email: </label>
        <input type="email" id="email" name="email" required><br><br>

        <input type="submit" value="enviar" </input>
        

    </form>    


    </body>
</html>