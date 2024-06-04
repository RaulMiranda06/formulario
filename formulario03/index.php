<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Formulario</title>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    </head>

    <body>
    <?php
        //3) Pesquisa com Método GET:
        //Descrição: Crie um formulário de pesquisa com um campo de texto.
        //Objetivo: Enviar o termo de pesquisa usando o método GET e exibir o termo pesquisado em uma nova página PHP.//
    ?>
    

    
    <h1>Formulário de Cadastro (GET)</h1>
    <form id="formulario_pesquisa" action="process_get.php" method="GET">
        <label for="text">digite um texto:</label>
        <input type="text" id="text" name="text" required><br><br>

        
        <input type="submit" value="Enviar">
    </form>
    <div id="resultado"></div><br><br>

<script>
$(document).ready(function() {
        $('#formulario_pesquisa').submit(function(event) {
            event.preventDefault(); // Evita a submissão padrão do formulário
        
            var text = $('#text').val();
            
            // Requisição AJAX para calcular.php
            $.ajax({
                type: 'GET',
                url: 'process_get.php',
                data: {
                    text: text,  
                },
                success: function(response) {
                    $('#resultado').html(response);
                },
                error: function(xhr, status, error) {
                    $('#resultado').html('Erro: ' + error);
                }
            });
        });
    });
</script>

    </body>
</html>