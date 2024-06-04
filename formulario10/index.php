<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Formulario</title>
    </head>

    <body>
    <?php

    //10) Enquete de Preferências:
    //Descrição: Desenvolva um formulário para uma enquete, por exemplo, sobre o filme favorito, com opções pré-definidas.
    //Objetivo: Enviar os dados usando o método POST para um script PHP que exiba a opção escolhida pelo usuário e um resumo dos resultados atuais (sem banco de dados, os resultados podem ser armazenados em uma variável de sessão para simulação).

    ?>
    
    <h1>Enquete de Preferências: (POST)</h1>
    <form action="process_get.php" method="POST">
        <label for="filme"> (Vote no seu o filme favorito) :</label><br><br>
        <input type="radio" name="filme" value="a"> a) Velozes Furiosos 1 </input><br><br>
        <input type="radio" name="filme" value="b"> b) Velozes Furiosos 2 </input><br><br>
        <input type="radio" name="filme" value="c"> c) Velozes Furiosos 3 </input><br><br>
        <input type="radio" name="filme" value="d"> d) Velozes Furiosos 4 </input><br><br>
        <input type="radio" name="filme" value="e"> b) Velozes Furiosos 5 </input><br><br>
        <input type="radio" name="filme" value="f"> c) Velozes Furiosos 6 </input><br><br>
        <input type="radio" name="filme" value="g"> d) Velozes Furiosos 7 </input><br><br>
        <input type="radio" name="filme" value="h"> b) Velozes Furiosos 8 </input><br><br>
        <input type="radio" name="filme" value="i"> b) Velozes Furiosos 9 </input><br><br>
        <input type="radio" name="filme" value="j"> c) Velozes Furiosos 10 </input><br><br>


        
        <input type="submit" value="Enviar">
    </form>    


    </body>
</html>