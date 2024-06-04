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

    //4) Formulário de Contato:
    //Descrição: Desenvolva um formulário de contato com campos para nome, email, assunto e mensagem.
    //Objetivo: Utilizar o método POST para enviar os dados a um script PHP que exiba uma mensagem de confirmação incluindo os dados enviados.

    ?>
    
    <h1>Formulário de Contatos (POST)</h1>
    <form id="formulario_contato" action="process_post.php" method="POST">
        <label for="nome">Nome: </label>
        <input type="nome" id="nome" name="nome" required><br><br>

        <label for="email">Email: </label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="assunto">Assunto: </label>
        <input type="assunto" id="assunto" name="assunto" required><br><br>

        <label for="mensagem">Mensagem: </label>
        <input type="mensagem" id="mensagem" name="mensagem" required><br><br>
        
        <input type="submit" value="Enviar">
    </form>    

    <div id="resultado"></div><br><br>

<script>
$(document).ready(function() {
        $('#formulario_contato').submit(function(event) {
            event.preventDefault(); // Evita a submissão padrão do formulário
        
            var nome = $('#nome').val();
            var email = $('#email').val();
            var assunto = $('#assunto').val();
            var mensagem = $('#mensagem').val();

            // Requisição AJAX para calcular.php
            $.ajax({
                type: 'POST',
                url: 'process_post.php',
                data: {
                    nome: nome,
                    email: email,
                    assunto: assunto,
                    mensagem: mensagem
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