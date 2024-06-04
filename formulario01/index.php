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

    //1) Formulário de Cadastro Simples:
    //Descrição: Crie um formulário HTML para cadastrar um usuário com campos como nome, email e idade.
    //Objetivo: Enviar os dados via método POST para um script PHP que exiba os dados enviados na tela.//
    ?>
    
    <h1>Formulário de Cadastro (POST)</h1>
    <form id='formulario_cadastro' action="process_post.php" method="post">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required><br><br>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>
        
        <label for="idade">Idade:</label>
        <input type="idade" id="idade" name="idade" required><br><br>
        
        <input type="submit" value="Enviar">
    </form>

    <div id="resultado"></div>

    <script>
        $(document).ready(function() {
            $('#formulario_cadastro').submit(function(event) {
                event.preventDefault(); // Evita a submissão padrão do formulário
			

                var nome = $('#nome').val();
                var email = $('#email').val();
                var idade = $('#idade').val();

                // Requisição AJAX para calcular.php
                $.ajax({
                    type: 'POST',
                    url: 'process_post.php',
                    data: {
                        nome: nome,
                        email: email,
                        idade: idade
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