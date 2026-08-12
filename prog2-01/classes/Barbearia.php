<?php
namespace Prog201\Classes;

require "utils/consts.php";

class Barbearia {
  private array $barbeiros;

  private array $cadeiras;
  private int $quantidadeCadeiras;

  public function __construct(array $barbeiros, int $quantidade_cadeiras) {
    $cadeiras = [];
    for ($i = 0; $i < $quantidade_cadeiras; $i++) {
      $cadeiras[$i] = ['barbeiro' => MSG_DESOCUPADA];
    }

    $this->barbeiros = $barbeiros;
    $this->cadeiras = $cadeiras;
    $this->quantidadeCadeiras = $quantidade_cadeiras;
  }

  public function listarBarbeiros() {
    print_r($this->barbeiros);
  }

  public function listarCadeiras() {
    print_r($this->cadeiras);
  }

  public function contratarBarbeiro() {
    // ...
  }
}