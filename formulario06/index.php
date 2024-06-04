<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <title>Formulario</title>
    </head>

    <body>
    <?php

   
    //6) Feedback de Produtos:
    //Descrição: Desenvolva um formulário para coletar feedback de produtos, com campos para nome do produto, avaliação (1 a 5 estrelas) e comentários.
    //Objetivo: Enviar os dados via POST para um script PHP que exiba um resumo do feedback recebido.

    ?>


    
    <h1>Avaliação de Produtos de Celulares (POST)</h1>
    <form id="formulario_feedback" action="process_post.php" method="POST">
        <label for="produto"> Informe o seu Produto: </label>
        <select name="produto" id="produto">
            <option value="apple"> APPLE </option>
            <option value="samsung"> SAMSUNG </option>
            <option value="motorola"> MOTOROLA </option>
            <option value="xiaomi"> XIAOMI </option>
        </select><br><br>

        <label for="avaliacao"> Informe sua Avaliação: </label>
        <select name="avaliacao" id="avaliacao">
            <option value="* "> * </option>
            <option value="**"> ** </option>
            <option value="***"> *** </option>
            <option value="****"> **** </option>
            <option value="*****"> ***** </option>
        </select><br><br>
        
        <label for="comentario"> Digite o seu Comentario: </label>
        <input type="comentario" name="comentario" id="comentario"><br><br>
        
        <input type="submit" value="Enviar">
    </form> 
    
    <div id="s"></div>

    <script>
        $(document).ready(function() {
            $('#formulario_feedback').submit(function(event) {
                event.preventDefault(); // Evita a submissão padrão do formulário
			
                var produto = $('#produto').val();
                var avaliacao = $('#avaliacao').val();
                var comentario = $('#comentario').val();

                // Requisição AJAX para calcular.php
                $.ajax({
                    type: 'POST',
                    url: 'process_post.php',
                    data: {
                        produto: produto,
                        avaliacao: avaliacao,
                        comentario: comentario

                    },
                    success: function(response) {
                        $('#s').html(' ' + response);
                    },
                    error: function(xhr, status, error) {
                        $('#s').html('Erro: ' + error);
                    }
                });
            });
        });
    </script>

    </body>
</html>