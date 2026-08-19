<?php
namespace Prog0601\Classes;

abstract class AbstractColor {
  private string $hexCode;

  abstract function getHexCode(): string;
}
