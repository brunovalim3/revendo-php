<?php
namespace Prog0601\Classes;

require_once "classes/Color.php";

final class Red extends Color {
  public function __construct() {
    parent::__construct("#ff0000");
  }
}