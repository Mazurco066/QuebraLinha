<?php
  ini_set('display_erros', 0);
  error_reporting(0);
 ?>

<html>

  <head>
    <title> TextWrapExerciseInterface </title>
    <meta charset="UTF-8">
    <meta name="author" content="Gabriel Mazurco Ribeiro">
    <meta name="description" content="Desafio Galoá">
  </head>

  <body>

      <?php

        //Incluindo as classes a serem usadas
        include("TextWrapExerciseInterface.class.php"); //Classe Interface fornecida pela Galoa
        include("QuebraLinha.class.php"); //Classe criada para implementar a classe Interface

        //Definindo variáveis que vao entrar como parametro na função
        $textoBruto = "Texto Digitado por Gabriel Mazurco Ribeiro com o intuito de testar a função de quebrar linhas de uma string bruta e ela deve retorna um array de string ja formatado para se realizar a impressão do mesmo, esse texto tem que ser bem grande msm por que eu quero que isso seja grande por que se não for grande não vai dar, acho que ja esta bom vou é parar";
        $quantidadeCaracteres = 40;

        //Instanciando o Objeto de QuebraLinha
        $obj = new QuebraLinha();

        //Formatando texto e o imprimindo
        $textoFormatado = $obj->textWrap($textoBruto, $quantidadeCaracteres);

        echo "<br>--------------------------------------------------------------------------<br>";

        $obj->showText($textoFormatado);

      ?>

  </body>

</html>
