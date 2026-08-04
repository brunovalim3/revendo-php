<?php
// Manipulação de arrays

// Criando um array
$linguagens = Array('C', 'C++', 'C#', 'Java', 'PHP', 'Ruby', 'Python');
// ou
$linguagens = Array(
  0 => 'C',
  1 => 'C++',
  2 => 'C#',
  3 => 'Java',
  4 => 'PHP',
  5 => 'Ruby',
  6 => 'Python'
);
// Array associativo(podem ser criados simplesmente atribuindo o valor)
// $pessoa = Array();
$pessoa["nome"] = "Fulano";
echo $pessoa["nome"];
// Iterações com foreach