<?php
namespace Classes;

include_once "classes/autoload.php";

use Classes\Carro;

final class Motorista {
  /**
   * @var string
   */
  private $nome;

  /**
   * @var Carro
   */
  private $carro;

  /**
   * @var bool
   */
  private $disponivel;

  function __construct(string $nome, Carro $carro) {
    $this->nome = $nome;
    $this->carro = $carro;
  }

  public function setDisponivel(bool $disponivel) {
    $this->disponivel = $disponivel;
  }

  public function __tostring() {
    $disp = $this->disponivel == true ? 'Sim' : 'Não';
    return "
    \nMotorista: {$this->nome}
    Carro: {$this->carro}
    Disponível: {$disp}\n";
  }
}
