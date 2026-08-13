<?php
namespace Classes;

include_once "classes/autoload.php";

use \Classes\{Carro, Motorista};
use \Data\DataMotoristas;

final class App {
  /**
   * @var Array
   */
  private $motoristas;
  
  public function __construct() {
    $list = DataMotoristas::getAll();
    foreach ($list as $key => $value) {
      $carro = new Carro(
        $value["carro"]["ano"],
        $value["carro"]["modelo"],
        $value["carro"]["cor"],
        $value["carro"]["placa"],
        $value["carro"]["marca"]
      );
      $this->motoristas[$key] = new Motorista($value["nome"], $carro);
    }
  }

  public function start() {
    echo "Bem vindo ao Viajados\n";
    foreach ($this->motoristas as $value) {
      echo $value;
    }
  }
}