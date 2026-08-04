<?php
  //Manipulação de strings
  /*
    Aspas duplas processa dentro da string, enquanto aspas simples não trata os
    caracteres especiais
  */
  $fruta = 'maçã';
  echo "uma $fruta";
  echo "\n";
  echo 'uma $fruta';
  echo "\n";

  // Concatenação
  $txtTeste = 'teste';
  $stringTeste = "teste $teste";
  echo "\n";
  $stringTeste = "teste " . $teste;
  echo "\n";

  // E temos as funções que manipulam as strings