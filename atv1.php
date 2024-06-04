<?php 
    // variaveis 
    $text = "Olá Mundo";
    $nome = "raul"; 
    $idade = 18;
    $var1 = 10; // variaveis integer
    $var2 = 10.00; // variaveis double
    $var3 = true; // bool
    $var4 = "10"; // string     
    $nulo = null;
    $aritrimetrica = ((8 * 2) * ( 15 - 5 ) / 5);
    $num1 = 1;
    $num2 = 2;
    $pessoa1 = "RAUL";
    $pessoa2 = "CARLOS";
    $idade1 = 18;
    $idade2 = 18;
    $par = 2;
    $impar = 3;
    $i = 0;


?>


<?php 
    // variaveis 
    $alunos = array(
        "nomeCompleto" => "Raul Santos Nunes De Miranda",
        "email" => "raul@gmail.com",
        "notas" => array(10, 5, 7)
    );
    
    
?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>teste php</title>
    </head>
    <body>
        
        <!--  Escreva um script PHP que exiba "Olá, Mundo!" na tela. -->
        <?php
            echo $text;    
        ?>

        <!--  Crie uma variável chamada `$nome` e atribua seu nome a ela. Em seguida, exiba o valor da variável na tela. -->
        <p> Olá me chamo <?php echo $nome ; ?>, eu tenho <?php echo $idade ?> anos de idade </p> 
        
        <!--  Use `echo` e `print` para exibir uma mensagem na tela, por exemplo, "PHP é divertido!".-->
        <?php echo "o php é uma linguagem de programação ";  print " e é muito divertido" ?>
    
        <!-- Crie uma variável com um valor complexo (por exemplo, uma matriz associativa) e use `var_dump()` para exibir informações sobre essa variável. -->
        <p> Var Dump: <?php var_dump($var1); var_dump($var2);  var_dump($var3);  var_dump($var4); ?> </p>
    
        <!-- Declare uma variável inteira e atribua a ela um número. Em seguida, exiba o valor da variável na tela. -->
        <p> eu sou variavel <?php echo gettype($var1); ?> </p> 

        <!-- Declare uma variável de ponto flutuante e atribua a ela um número decimal. Em seguida, exiba o valor da variável na tela. -->
        <p> eu sou variavel <?php echo gettype($var2); ?> </p>

        <!-- Declare uma variável booleana e atribua a ela um valor verdadeiro ou falso. Em seguida, exiba o valor da variável na tela. -->
        <p> eu sou variavel <?php echo gettype($var3); ?> </p>
        
        <!-- Declare uma variável de string e atribua a ela uma frase. Em seguida, exiba o valor da variável na tela. -->
        <p> eu sou variavel <?php echo gettype($var4); ?> </p>

        <!-- Crie um array numérico ou associativo e exiba seus elementos na tela. -->
        <p>  Nome do Aluno:  <?php echo $alunos["nomeCompleto"] ?>, Notas 1º bimestre: <?php echo $alunos["notas"][0] ?> , Notas 2º bimestre: <?php echo $alunos["notas"][1] ?> , Notas 3º bimestre: <?php echo $alunos["notas"][2] ?> </p>

        <!-- Declare uma variável e atribua a ela o valor `null`. Em seguida, verifique se a variável é `null` e exiba uma mensagem correspondente. -->
        <?php 
            if($nulo == null){
                echo "está variavel é nulo";
            }else{
                echo "está variavel não é nulo";
            }
              
        ?> 

        <!--  Crie uma expressão aritmética simples usando operadores como `+`, `-`, `*` e `/`, e exiba o resultado na tela -->
        <p> o resultado da expressão numerica de ((8*2)*(15-5)/5) =  <?php  echo $aritrimetrica ?> </p>
        
        <!-- Use operadores de comparação como `==`, `!=`, `>`, `<`, `>=` e `<=` para comparar dois valores e exiba o resultado na tela. -->    
        <?php 
            if($num2 > $num1){
                echo "o numero 2 é maior que numero 1";  
            }
            else{
                echo "o numero 1 é maior que numero 2";    
            }
        ?> 
        <br>
        <br>

        <!-- Crie uma expressão lógica usando operadores como `&&`, `||` e `!`, e exiba o resultado na tela. -->    
        <?php 
            if($pessoa1 != $pessoa2 && $idade1 == $idade2){
                echo "Raul e Carlos possui a mesma idade";
            }
            else{
                echo "Raul e Carlos não possui a mesma idade";
            }

        ?>
        <br>
        <br>    

        <!--  Use a estrutura `if` para verificar se um número é par ou ímpar e exiba uma mensagem correspondente na tela. -->    
        <?php 
            if ($par % 2==0){
                echo "este número é par";
            }
            else{
                echo "este número é impar";
            }
        ?> 
         
        <br>
        <br> 
        
        <?php   
            
            if ($impar % 2!=0){
                echo "este número é impar";
            }
            else{
                echo "este número é par";
            }
        ?>
        <br>
        <br>



       <!--  Use a estrutura `switch` para exibir uma mensagem diferente com base no valor de uma variável. -->
        <?php switch ($i){
            case 0: 
                echo "O numero = 0";
        } 

        ?>
        <br>
        <br>

        <!-- Use um loop `for` para exibir os números de 1 a 10 na tela. -->
        <?php
            for($cont = 0; $cont <=10; $cont++ ){
                echo $cont; 
            }
        ?>
        <br>
        <br>
        
        <!-- Use um loop `while` para exibir os números de 1 a 10 na tela. -->
        <?php

            $k = 0; 

            while($k<=10){
                echo $k; 
                $k++;
            }
        ?>












    </body>
</html>