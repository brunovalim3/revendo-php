<?php
namespace Prog0601\Classes;

require_once "classes/Color.php";

final class Blue extends Color {
  public function __construct() {
    parent::__construct("#0000ff");
  }
}