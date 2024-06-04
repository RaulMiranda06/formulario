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

    //5) Calculadora Simples:
    //Descrição: Crie um formulário para uma calculadora com campos para dois números e uma operação (adição, subtração, multiplicação, divisão).
    //Objetivo: Enviar os dados usando o método POST e processar a operação em um script PHP, exibindo o resultado.

    ?>
    
    <h1>Calculadora Simples (POST)</h1>
    <form id='formulario-calculadora' action="process_post.php" method="POST">
        <label for="num1">Informe o 1º numero:  </label>
        <input type="num1" id="num1" name="num1" required><br><br>
        
        <label for="operacao">Escolha a Operação </label>    
        <select id="operacao" name="operacao" required> 
            <option value="adicao"> (+) </option>
            <option value="subtracao"> (-) </option>
            <option value="multiplicao"> (x)  </option>
            <option value="divisao"> (/) </option> 
        </select><br><br>


        <label for="num2">Informe o 2º numero:  </label>
        <input type="num2" id="num2" name="num2" required><br><br>

        <input type="submit" value="resultado">


    </form>    
    <div id="resultado"></div>
    <script>
        $(document).ready(function() {
            $('#formulario-calculadora').submit(function(event) {
                event.preventDefault(); // Evita a submissão padrão do formulário
			

                var num1 = $('#num1').val();
                var num2 = $('#num2').val();
                var operacao = $('#operacao').val();

                // Requisição AJAX para calcular.php
                $.ajax({
                    type: 'POST',
                    url: 'process_post.php',
                    data: {
                        num1: num1,
                        num2: num2,
                        operacao: operacao
                    },
                    success: function(response) {
                        $('#resultado').html('Resultado: ' + response);
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