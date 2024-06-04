<?php
    $num1 = 10;
    $tab = 5;
    $contPar = 0;
    $contImpar = 0;
    $soma = 0;
    $numero = array (100, 50, 80);
    $maiorNumero = null;
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <!-- 1) Crie um programa que verifica se um número é positivo, negativo ou zero. -->
    <h4> 1) Crie um programa que verifica se um número é positivo, negativo ou zero. </h4>
    <?php
        if ($num1 < 5){
            echo "o número é positivo";
        }
        else if ($num1 == 0){
            echo "o número é nulo";
        }
        else{
            echo "o número é negativo";
        }
    ?>  
    <br>
    <br>
    <!-- 2) Escreva um código que determine se um número é par ou ímpar.-->
    <h4>2) Escreva um código que determine se um número é par ou ímpar.</h4>
    <?php
        if($num1 % 2==0){
            echo "esté numero é par";
        }
        else{
            echo "esté numero não é par";
        }
    ?>
    <br>
    <br>
    <!-- 3 Faça um programa que verifica se um aluno foi aprovado, reprovado ou está de recuperação com base em sua nota.-->    
   <h4>3) Faça um programa que verifica se um aluno foi aprovado, reprovado ou está de recuperação com base em sua nota.</h4>
   <?php
        if($num1 <6 ){
            echo "O aluno está aprovado";
        }
        else{
            echo "O aluno não está aprovado";
        }
    ?>    

    <br>
    <br>
        
    <!-- 4) Desenvolva um código que calcule e imprima a tabuada de um número fornecido pelo usuário.-->   
    <h4> 4) Desenvolva um código que calcule e imprima a tabuada de um número fornecido pelo usuário. </h4> 
    
    <?php
        for($i=0; $i<=10; $i++){
            echo"A tabuada número 5 x ". $i ." = ". $tab * $i; 
            echo"<br>";       
        }

    ?>
    
    <br>
    <br>
        
    <!-- 5) Elabore um programa que conte e exiba a quantidade de números pares e ímpares em um intervalo definido pelo usuário.--> 
    <h4> 5) Elabore um programa que conte e exiba a quantidade de números pares e ímpares em um intervalo definido pelo usuário</h4>
    <?php
        for($i=0; $i<=10; $i+=2){
            $contPar = ($contPar + $i);
            
        }
        echo "A soma dos número pares de 1 ate 10 = ". $contPar;
        echo"<br>";
        
        for($i=0; $i<=10; $i++){
            $contImpar = ($contImpar + $i);
        }
        
        if($contImpar % 2 <> 0){
            echo "A soma dos número impar de 1 ate 10 = ". $contImpar;
        }
        
        

    ?>
    <br>
    <br>
    
    <!-- 6) Escreva um código que calcule e exiba a soma dos números de 1 a 100.--> 
    <h4>6) Escreva um código que calcule e exiba a soma dos números de 1 a 100.</h4>    
    <?php
        for($i=0; $i<=100; $i++){
            $soma = ($soma + $i);
        }
        echo "a soma dos numero de 1 a 100 = ". $soma;
    ?>

    <!-- 7) Crie um programa que encontre e exiba o maior número em um array.--> 
    <h4> 7) Crie um programa que encontre e exiba o maior número em um array.</h4> 
    
    <?php
        foreach($numero as $numero){
            if ($maiorNumero === null || $numero > $maiorNumero) {
                $maiorNumero = $numero;
            }
        }
        echo "O maior numero é: ". $maiorNumero;
    ?>

    <!-- 8) Elabore um código que verifique se uma palavra é um palíndromo ou não. Dica: Utilize a função strrev(). --> 
    <h4> 8) Elabore um código que verifique se uma palavra é um palíndromo ou não. Dica: Utilize a função strrev(). </h4>    

    <?php
        $palavra = "arara";

        $palavra_invertida = strrev($palavra);

        if ($palavra == $palavra_invertida){
            echo "$palavra é um palíndromo.";
        } else {
            echo "$palavra não é um palíndromo.";
        }
    ?>
    
    <!--  9) Escreva um programa que imprima os números de Fibonacci até um valor fornecido pelo usuário. --> 
    <h4>  9) Escreva um programa que imprima os números de Fibonacci até um valor fornecido pelo usuário. </h4>  
     
    <?php 
        $limite = 10000;
        $num01 = 0;
        $num02 = 1;
        $result = 0;

        while($result < $limite){
            $result = $num01 + $num02;
            if($result < $limite){
                echo $result. ", ";
            }
            $num01 = $num02;
            $num02 = $result;
        }
        
    ?><br>;

    <!--  10) Escreva um código que conte e exiba a quantidade de vogais em uma frase fornecida pelo usuário. Dica: Utilize a expressão regular preg_match_all("/[aeiouAEIOU]/", $frase); --> 
    <h4>  10) Escreva um código que conte e exiba a quantidade de vogais em uma frase fornecida pelo usuário. Dica: Utilize a expressão regular preg_match_all("/[aeiouAEIOU]/", $frase); </h4>    
    
    <?php
        $frase = "cruzeiro maior de minas ";
        preg_match_all("/[aeiouAEIOU]/", $frase, $resultado01);
        echo count ($resultado01[0]);

    ?>
    <br>
    <br>



    <!-- ultilize a estrutura foreach para pecorrer e exibir todos os elementos de um array $numeros = [10, 20, 30, 40, 50]; -->
    <h4> 11) ultilize a estrutura foreach para pecorrer e exibir todos os elementos de um array $numeros = [10, 20, 30, 40, 50]; </h4>

    <?php
        $num03 = [10, 20, 30, 40, 50];


        foreach ($num03 as $num03){
            echo $num03 . "\n";
        }
    ?>
    <br>
    <br>


    <!-- pecorra array asssociativo ultilizando a estrutura foreach e exiba tanto as chaves quanto os valores 
    $aluno = [
    "nome" => "maria",
    "idade" => 25,
    "curso" => "engenharia"
    ];-->

    <h4> 12) pecorra array asssociativo ultilizando a estrutura foreach e exiba tanto as chaves quanto os valores 
    $aluno = [
    "nome" => "maria",
    "idade" => 25,
    "curso" => "engenharia"
    ]; </h4>

    <?php
        $aluno = [
            "nome" => "maria",
            "idade" => 25,
            "curso" => "engenharia"
        ];
        
        foreach ($aluno as $key => $values){
            echo "chave:  $key, valor: $values <br>"; 
        }    

    ?>    
    <br>
    <br>
    
    <!-- 13) Utilize a estrutura foreach para calcular a média de valores em um array . -->
    <h4>13) Utilize a estrutura foreach para calcular a média de valores em um array .</h4>    
    
    <?php
        $num05 = [10, 20, 30, 40, 50];
        $media = 0.00;
        $soma= 0;
        $cont=0;

        foreach ($num05 as $valor){
            $soma += $valor;
            $cont++;     
        }
        $media = $soma / $cont;
        
        echo "o valor da media é = ". $media;
    ?>    
    <br>
    <br>
    
    <!-- 14) implemente um loop for para calcular e exibir os primeiros 5 multipo de 3 -->
    <h4> 14) implemente um loop for para calcular e exibir os primeiros 5 multipo de 3 </h4>
    
    <?php
        $multiplo03 = 0;
        $k=0;

        for($k=0; $k<=5; $k++){
            $multiplo03 = 3 * $k; 
        }
        echo "os primeiros 5 multipo de 3 é: ". $multiplo03;
    
    ?>
    <br>
    <br>

    <!-- 15) ultize um loop while para calcular e exibir a soma dos números pares de 1 a 10. -->
    <h4> 15) ultize um loop while para calcular e exibir a soma dos números pares de 1 a 10. </h4>
    
    <?php
        $somaPar = 0;
        $w = 0;

        while($w <= 10){
            if($w % 2 == 0){
                $somaPar += $w;  
            }
            $w++;
        }
        echo "a soma dos dos número pares de 1 a 10 = ". $somaPar;

    ?>
    
    <!-- 16) implemente um loop while para exibir os números de 1 a 5 -->
    <h4> 16) implemente um loop while para exibir os números de 1 a 5 </h4>

    <?php
        $p=1;

        while( $p <=5 ){
            
            echo $p;
            
            $p++;
        }
    ?>
    <br>
    <br>

    <!-- 17) criar um loop while para imprimir a tabuada do 7 -->
    <h4> 17) criar um loop while para imprimir a tabuada do 7 </h4>
        
    <?php
        $tab07 = 7;
        $contTab = 0;

        while( $contTab <= 10 ){
            
            echo"A tabuada número 7 x ". $contTab ." = ". $contTab * $tab07; 
            echo"<br>"; 
            
            $contTab++;
        }
    ?>
    <br>
    <br>

    <!-- 18) desenvolva um loop while para calcular e exibir os quadrado dos números de 1 a 5 -->
    <h4> 18) desenvolva um loop while para calcular e exibir os quadrado dos números de 1 a 5 </h4>

    <?php
        $numero = 0;
        

        while($numero <= 5 ){
            $quadrado = $numero * $numero;
            echo "O quadrado número ". $numero ." = ". $quadrado;
            $numero++;
            echo "<br>";
        }
    ?>    

    <!-- 19) escreva um loop while para exibir os números de 10 a 1 em ordem decrescente. -->
    <h4> 19) escreva um loop while para exibir os números de 10 a 1 em ordem decrescente. </h4>

    <?php

        $i=10;

        while($i >= 1 ){
          echo $i;
          $i-=1;
          echo "<br>";
        }
    ?> 
    <br>
    <br>


    <!-- 20) escreva um loop do-while para exibir os números de 10 a 1 em ordem decrescente. -->
    <h4> 20) escreva um loop do-while para exibir os números de 10 a 1 em ordem decrescente. </h4>

    <?php

        $i=10;

        do{
            echo $i;
            echo "<br>";

            $i-=1;
        }while($i >= 1);
    ?>      

    <!-- 21) desenvolva um loop for que conte de 0 a 100 de 10 em 10. -->
    <h4> 21) desenvolva um loop for que conte de 0 a 100 de 10 em 10. </h4>

    <?php

        for($i=0; $i<=100; $i+=10 ){
            echo "\n". $i; 
        }
    ?>

    <!-- 22) Escreva um loop for que imprima os números de 1 a 10. -->
    <h4> 22) Escreva um loop for que imprima os números de 1 a 10. </h4>

    <?php
        for($i=1; $i<=10; $i++){
            echo "\n". $i;    
        }
    ?>
        


</body>
</html>