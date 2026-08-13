<?php
namespace Classes;

final class Carro {
  private $ano;
  private $modelo;
  private $cor;
  private $placa;
  private $marca;

  public function __construct(
    int $ano,
    string $modelo,
    string $cor,
    string $placa,
    string $marca
  ) {
    $this->ano = $ano;
    $this->modelo = $modelo;
    $this->cor = $cor;
    $this->placa = $placa;
    $this->marca = $marca;
  }

  public function __toString() {
    return "{$this->marca} {$this->modelo} {$this->cor} ({$this->ano}) Placa:{$this->placa}";
  }
};
