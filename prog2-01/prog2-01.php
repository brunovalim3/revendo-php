<?php
require "classes/Barbearia.php";

use Prog201\Classes\Barbearia;

// Orientação a objetos

// Exemplo base, Barbearia

/*
  Programação estruturada: As funções se interligam por meio de: sequência,
  decisão e iteração.
*/

/*
  Orientação a objetos: Classe(Tipo de dado com atributos e funções)
*/

$barbeariaFioDaNavalha = new Barbearia(['Fulano'], 2);
$barbeariaTesouraDourada = new Barbearia(['Ciclano', 'Bertano'], 2);

// $barbeariaFioDaNavalha->listarBarbeiros();
// $barbeariaTesouraDourada->listarBarbeiros();
$barbeariaTesouraDourada->listarCadeiras();
