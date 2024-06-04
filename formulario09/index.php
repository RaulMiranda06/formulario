<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Formulario</title>
    </head>

    <body>
    <?php

    //9) Quiz Online:
    //Descrição: Crie um formulário com perguntas de múltipla escolha.
    //Objetivo: Enviar as respostas usando o método POST para um script PHP que calcula e exibe a pontuação do usuário.

    ?>
    
    <h4>Responda as Perguntas Corretamente (POST)</h4>
    <form action="process_get.php" method="POST">
        <label for="pergunta01">Pergunta (1) Qual é a capital do Brasil ?</label><br><br>
        <input type="radio" name="pergunta01" value="a"> a) Rio de Janeiro </input><br><br>
        <input type="radio" name="pergunta01" value="b"> b) São Paulo </input><br><br>
        <input type="radio" name="pergunta01" value="c"> c) Brasília </input><br><br>
        <input type="radio" name="pergunta01" value="d"> d) Belo Horizonte </input><br><br>
        
        <label for="pergunta02">pergunta (2) Quem escreveu a peça "Romeu e Julieta" ?</label><br><br>
        <input type="radio" name="pergunta02" value="a"> a) William Shakespeare </input><br><br>
        <input type="radio" name="pergunta02" value="b"> b) Charles Dickens </input><br><br>
        <input type="radio" name="pergunta02" value="c"> c) Jane Austen </input><br><br>
        <input type="radio" name="pergunta02" value="d"> d) George Orwell </input><br><br>
        
        
        <input type="submit" value="Enviar">
    </form>    


    </body>
</html>