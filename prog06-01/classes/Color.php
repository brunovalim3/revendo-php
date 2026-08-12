<?php
require_once "classes/AbstractColor.php";

class Color extends AbstractColor {
  private string $hexCode;

  public function __construct($hexCode) {
    $this->hexCode = $hexCode;
  }

  public function getHexCode(): string {
    return $this->hexCode;
  }
}