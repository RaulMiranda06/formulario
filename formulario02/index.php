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

    //2) Formulário de Login:
    //Descrição: Desenvolva um formulário de login com campos de usuário e senha.
    //Objetivo: Utilizar o método POST para enviar os dados a um script PHP que valide se os dados inseridos correspondem a um conjunto predefinido (por exemplo, usuário: admin, senha: 1234) e exiba uma mensagem de sucesso ou erro.
    ?>

    <h1>Formulário de Cadastro (POST)</h1>
    <form id="formulario_login" action="process_post.php" method="post">
        <label for="usuario">Usuario:</label>
        <input type="usuario" id="usuario" name="usuario" required><br><br>
        
        <label for="senha">Senha:</label>
        <input type="senha" id="senha" name="senha" required><br><br>
        
        <input type="submit" value="Enviar">
    </form><br><br>

    <div id="resultado"></div><br><br>

    <script>
    $(document).ready(function() {
            $('#formulario_login').submit(function(event) {
                event.preventDefault(); // Evita a submissão padrão do formulário
			
                var usuario = $('#usuario').val();
                var senha = $('#senha').val();
                
                // Requisição AJAX para calcular.php
                $.ajax({
                    type: 'POST',
                    url: 'process_post.php',
                    data: {
                        usuario: usuario,
                        senha: senha
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