<?php
abstract class AbstractColor {
  private string $hexCode;

  abstract function getHexCode(): string;
}
