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

    //7) Registro de Eventos:
    //Descrição: Crie um formulário para registrar participantes de um evento, com campos como nome, email e evento de interesse.
    //Objetivo: Utilizar o método POST para enviar os dados a um script PHP que exiba uma lista de participantes registrados.


    ?>
    
    <h1>Formulário de Contatos (POST)</h1>
    <form id='formulario_participantes' action="process_post.php" method="POST">
        <label for="nome"> Nome: </label>
        <input type="nome" id="nome" name="nome" required><br><br>

        <label for="email"> Email: </label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="evento"> Evento: </label>
        <select name="evento" id="evento">
            <option value="casamento"> casamento  </option>
            <option value="aniversário"> aniversário  </option>
            <option value="churrasco"> churrasco  </option>
            <option value="formatura"> formatura  </option>
        </select><br><br>
        
        <input type="submit" value="Enviar">
    </form><BR></BR>
    
    <div id="resultado"></div><br><br>

    <script>
    $(document).ready(function() {
            $('#formulario_participantes').submit(function(event) {
                event.preventDefault(); // Evita a submissão padrão do formulário
			
                var nome = $('#nome').val();
                var email = $('#email').val();
                var evento = $('#evento').val();
                
                
                // Requisição AJAX para calcular.php
                $.ajax({
                    type: 'POST',
                    url: 'process_post.php',
                    data: {
                        nome: nome,
                        email: email,
                        evento: evento
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